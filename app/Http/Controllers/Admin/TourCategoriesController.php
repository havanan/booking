<?php

namespace App\Http\Controllers\Admin;

use App\Model\TourCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class TourCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TourCategory::all();
       return view('admin.tour_categories.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('name','status');
        $input['slug'] = Str::slug($input['name']);
        $creat = TourCategory::create($input);
        if ($creat){
            $status = 'success';
            $message = 'Tạo thành công';

        }else{
            $status = 'error';
            $message = 'Tạo thất bại';
        }
        return back()->with($status,$message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->only('name','status');
        $input['slug'] = Str::slug($input['name']);

        $info = TourCategory::find($id);
        if($info){
            $info->name = $request->name;
            $info->status = $request->status;
            $info->slug = $input['slug'];
            if ($info->save()){
                $status = 'success';
                $message = 'Sửa thành công';
            }else{
                $status = 'error';
                $message = 'Sửa thất bại';
            }
        }else{
            $status = 'error';
            $message = 'Không có thông tin phù hợp';
        }
        return back()->with($status,$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = TourCategory::find($id);
        if($info){
            if ($info->delete()){
                $status = 'success';
                $message = 'Xóa thành công';

            }else{
                $status = 'error';
                $message = 'Xóa thất bại';
            }
        }else{
            $status = 'error';
            $message = 'Không có thông tin phù hợp';

        }
        return back()->with($status,$message);
    }
}
