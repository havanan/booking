<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Location;
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
       $data = Tour::all();
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
        $locations = Location::where('status',1)->pluck('name','id');
        return view('admin.tours.create',compact('categories','locations'));
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
//        $param = $request->only('name','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time','category_id');
        $input = $request->only('name','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time');
        $input['slug'] = Str::slug($input['name']);
        $input['vehicle'] = json_encode($vehicle);

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
        return view('admin.tours.view',compact('info'));
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
        $categories = Category::where('status',1)->pluck('name','id');
        $locations = Location::where('status',1)->pluck('name','id');
        return view('admin.tours.edit',compact('info','categories','locations'));
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
        $input = $request->only('name','avatar','start_date','vehicle','slide','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time');
        $input['slug'] = Str::slug($input['name']);
        $update = Tour::where('id',$id)->update($input);
        if ($update){
            $status = 'success';
            $message = 'Sửa thành công';
            return redirect()->route('admin.post.index')->with($status,$message);
        }else{
            $status = 'error';
            $message = 'Sửa thất bại';
            return back()->with($status,$message);
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
