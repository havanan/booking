<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Location;
use App\Model\Service;
use App\Model\Tour;
use App\Model\TourCt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Model\TourCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Tour::orderBy('id','desc')->get();
       return view('admin.tours.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = TourCategory::where('status',1)->pluck('name','id');
        $locations = Location::where('status',1)->orderBy('location')->pluck('name','id');
        $services = Service::where('status',1)->get();
        return view('admin.tours.create',compact('categories','locations','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = $request->category_id;
        $vehicle = $request->vehicle;
        $services = $request->service;
        $input = $request->only('name','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time');
        $input['slug'] = Str::slug($input['name']);
        $input['vehicle'] = json_encode($vehicle);
        $input['service'] = json_encode($services);

        DB::beginTransaction();

        try {
            $creat = Tour::create($input);
            $this->insertTourCt($category_id,$creat->id);

            $status = 'success';
            $message = 'Tạo thành công';

            DB::commit();
            return redirect()->route('admin.tour.index')->with($status,$message);
            // all good
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            $status = 'error';
            $message = 'Tạo thất bại';
            return back()->with($status,$message);
            // something went wrong
        }

    }
    function insertTourCt($category_id,$tour_id){
        if (count($category_id) > 0){
            foreach ( $category_id as $item){
                $input = [
                    'tour_id' => $tour_id,
                    'tour_category_id' => (int)$item
                ];
                TourCt::create($input);
            }
        }
        return 'true';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Tour::with('location')->find($id);
        $services_seleced = array();
        $vehicle_seleced = array();

        $vehicle = json_decode($info['vehicle']);
        $services = json_decode($info['service']);

        if ($vehicle != null){
            $vehicle_seleced = array_flip($vehicle);

        }
        if ($services != null){
            $services_seleced = array_flip($services);

        }
        $categories_selected = TourCt::where('tour_id',$id)->get();
        $services = Service::where('status',1)->get();
        return view('admin.tours.view',compact('info','categories_selected','services','vehicle_seleced','services_seleced'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Tour::with('location')->find($id);
        $services_seleced = array();
        $vehicle_seleced = array();

        $vehicle = json_decode($info['vehicle']);
        $services = json_decode($info['service']);

        if ($vehicle != null){
            $vehicle_seleced = array_flip($vehicle);

        }
        if ($services != null){
            $services_seleced = array_flip($services);

        }
        $categories_selected = TourCt::where('tour_id',$id)->pluck('tour_id','tour_category_id');
        $categories = TourCategory::where('status',1)->pluck('name','id');
        $locations = Location::where('status',1)->orderBy('location')->pluck('name','id');
        $services = Service::where('status',1)->get();
        return view('admin.tours.edit',compact('info','categories','locations','categories_selected','services','vehicle_seleced','services_seleced'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category_id = $request->category_id;
        $vehicle = $request->vehicle;
        $services = $request->service;
        $input = $request->only('name','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time');
        $input['slug'] = Str::slug($input['name']);
        $input['vehicle'] = json_encode($vehicle);
        $input['service'] = json_encode($services);
        DB::beginTransaction();

        try {
            $update = Tour::where('id',$id)->update($input);
            $remove_log = TourCt::where('tour_id',$id)->delete();
            $this->insertTourCt($category_id,$id);

            $status = 'success';
            $message = 'Sửa thành công';

            DB::commit();
            return redirect()->route('admin.tour.index')->with($status,$message);
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            $status = 'error';
            $message = 'Sửa thất bại';
            return back()->with($status,$message);
            // something went wrong
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Tour::find($id);
        if (isset($info['id'])){

            if ($info->delete()){
                $status = 'success';
                $message = 'Xóa thành công';
            }else{
                $status = 'error';
                $message = 'Xóa thất bại';
            }

        }else{
            $status = 'error';
            $message = 'Không có thông tin';
        }


        return back()->with($status,$message);
    }
}
