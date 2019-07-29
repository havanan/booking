<?php

namespace App\Http\Controllers\Admin;

use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.services.index',compact('data'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('name','icon','note','price','discount','status');
        $input['slug'] = Str::slug($input['name']);
        $creat = Service::create($input);
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
    public function update(Request $request, $id)
    {
        $input = $request->only('name','icon','note','price','discount','status');
        $input['slug'] = Str::slug($input['name']);
        $info = Service::find($id);
        if (isset($info['id'])){
            $info->name = $input['name'];
            $info->icon = $input['icon'];
            $info->price = $input['price'];
            $info->discount = $input['discount'];
            $info->status = $input['status'];
            $info->note = $input['note'];
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
            $message = 'Không có thông tin';
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
        $info = Service::find($id);
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
