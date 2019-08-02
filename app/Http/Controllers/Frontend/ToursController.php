<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Booking;
use App\Model\Customer;
use App\Model\Location;
use App\Model\Service;
use App\Model\Tour;
use App\Model\TourCategory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ToursController extends Controller
{
    //lấy tour theo category
   public function getByCat($slug){
       $info = $this->findBySlug($slug);
       $tour_category_id = null;
       if (!empty($info)){

           $tour_category_id = $info['id'];
       }
       $params = [
            'tour_category_id' => $tour_category_id,
            'paginate' => 12
       ];
       $data = $this->getTour($params);
       return view('frontend.tour.index',compact('data','info'));
   }
    //hàm tìm kiếm tour
    public function getTour($params)
    {
        $data =  Tour::orderBy('id','desc');
        if (isset($params['tour_category_id'])){
          $data = $data-> whereHas('categories',function ($query) use ($params){
                $query->where('tour_category_id', '=', $params['tour_category_id']);
            });
        }
        if (isset($params['location_name']) and $params['location_name'] != null ){

            $data = $data-> whereHas('location',function ($query) use ($params){
                $query->where('locations.name', 'like', '%'.$params['location_name'].'%');
            });
        }
        if (isset($params['name'])){
            $data = $data ->where('name','like','%'.$params['name'].'%');
        }
        if (isset($params['service'])){
            $data = $data ->where('service','like','%'.$params['service'].'%');
        }
        if (isset($params['name']) and $params['name'] != null){
            $data = $data ->where('name','like','%'.$params['name'].'%');
        }
        if (isset($params['location']) and $params['location'] != null){
            $data = $data ->whereIn('location_id',$params['location']);
        }
        if (isset($params['price_gr'])){
          $data = $data->where(function ($query) use($params) {
                    $query->whereBetween('price', $params['price_gr'])
                    ->orwhereBetween('price_discount', $params['price_gr']);
            });
        }
        if (isset($params['limit'])){
            $data = $data ->limit(6);
        }
        if (isset($params['paginate'])){
            $data = $data ->paginate($params['paginate']);
        }else{
            $data = $data->get();
        }

        return$data;
    }
    //tìm kiếm tour
    public function find(Request $request){
        $services_selected= array();
        $params = $request->only('name','tour_category_id');
       $price = $request->price;
       $service = $request->service;
       $info = TourCategory::find($request->tour_category_id);
       if ($price != null){
           $price_gr = explode(';',$price);
           $params['price_gr'] = $price_gr;
       }
       if (!empty($service)){
           $params['service'] = json_encode($service);
       }
        $params['paginate'] = 12;
        $data = $this->getTour($params);
        if ($service != null){
            $services_selected = array_flip($service);
        }
        return view('frontend.tour.index',compact('data','info','params','services_selected'));

    }
    //tìm tour theo địa điểm
    public function findByLocation(Request $request){
        $params = array();
        $services_selected = array();

        $location_name = $request->location_name;
        $info['name'] =$location_name;
        $info['id'] =null;

        $params['paginate'] = 12;
        $params['location_name'] = $location_name;
        $data = $this->getTour($params);
        return view('frontend.tour.index',compact('data','info','params','services_selected'));

    }
    public function view($slug){
       $info = $this->findBySlug($slug);
        return view('frontend.tour.view',compact('info'));
    }
    public function book($slug){
        $info = $this->findBySlug($slug);
        return view('frontend.tour.book',compact('info'));
    }
    // tính tổng tiền tour
    public function getTotalPrice($input_price){
        $price = $this->getPriceCustomer($input_price);
        $price_children = $input_price['price_children'];
        $price_baby = $input_price['price_baby'];

        $total = $price*$input_price['customer'] + $price_children*$input_price['children'] + $price_baby*$input_price['baby'];
        return $total;

    }
    //lấy giá tiền của người lớn
    public function getPriceCustomer($input_price){
        $price = $input_price['price'];
        $price_discount = $input_price['price_discount'];

        if ($price_discount <= 0){
            return $price;
        }else{
            return $price_discount;
        }

    }
    //đặt tour
    public function booking(Request $request,$slug){
        $params = $request->only('name','email','phone','address','customer','children','baby','note');
        $input_customer = $request->only('name','email','phone','address');
        $input_price = $request->only('customer','children','baby');
        // lấy thông tin tour
        $tour_info = $this->findBySlug($slug);
        //check info tour
        if (empty($tour_info)){
            $status = 'error';
            $message = 'Không tìm thấy thông tin tour';
            return back()->with($status,$message);
        }
        DB::beginTransaction();
        //lấy thông tin nhân viên tạo tour
        $user_id = isset(Auth::user()->id) ? Auth::user()->id : null;
        //gán thông tin giá vào mảng tính tiền tour
        $input_price['price']=$tour_info['price'];
        $input_price['price_discount']=$tour_info['price_discount'];
        $input_price['price_children']=$tour_info['price_children'];
        $input_price['price_baby']=$tour_info['price_baby'];
        //tính tổng thành viên
        $amount = $params['customer'] + $params['children'] + $params['baby'];
        //tính tổng tiền
        $total_price = $this->getTotalPrice($input_price);
        try {
            //tạo khách hàng
            $customer = $this->createCustomer($input_customer);
            $customer_id = $customer['id'];
            $booking_date = Carbon::now()->format('Y-m-d');
            $start_date = date('Y-m-d',strtotime($request->start_date));
            //gán thông tin cần cho tạo booking
            $input_booking = $this->makeInputBooking($tour_info['id'],$customer_id,$user_id,0,$amount,$booking_date,$start_date,$total_price,0,$params['note'],json_encode($input_price));
            //tạo booking
            $booking = $this->createBooking($input_booking);
            $booking_id = $booking['id'];
            //lưu vào db
            DB::commit();

            return redirect()->route('booking.get_booking_info',$booking_id);
        } catch (\Exception $e) {

            //xóa hết thông tin booking vừa tạo
            DB::rollback();
            $status = 'error';
            $message = 'Đặt tour không thành công, vui lòng kiểm tra lại thông tin';
            return back()->with($status,$message);

        }
    }
    public function makeInputBooking($tour_id,$customer_id,$user_id,$status,$amount,$booking_date,$start_date,$total_price,$discount,$note,$log){
       $input_booking = array();
        $input_booking['tour_id'] = $tour_id;
        $input_booking['customer_id'] = $customer_id;
        $input_booking['user_id'] = $user_id;
        $input_booking['status'] = $status;
        $input_booking['amount'] = $amount;
        $input_booking['booking_date'] = $booking_date;
        $input_booking['start_date'] = $start_date;
        $input_booking['total_price'] = $total_price;
        $input_booking['discount'] = $discount;
        $input_booking['note'] = $note;
        $input_booking['log'] = $log;
        return $input_booking;
    }
    public function createCustomer($params){
        $customer = Customer::where('email',$params['email'])->updateOrCreate($params);
        return $customer;
    }
    public function createBooking($params){
        if (empty($params)){
            return false;
        }
        $booking = Booking::create($params);
        return $booking;
    }
    public function findBySlug($slug){
        $info = Tour::where('slug','like','%'.$slug.'%')->first();
        return $info;
    }
}
