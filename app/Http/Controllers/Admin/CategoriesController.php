<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.categories.index',compact('data'));

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
        $creat = Category::create($input);
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
        $input = $request->only('name','parent_id','status');
        $info = Category::find($id);
        if (isset($info['id'])){
            $info->name = $input['name'];
            $info->parent_id = isset($input['parent_id']) ? $input['parent_id'] : null;
            $info->status = $input['status'];

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
        $info = Category::find($id);
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
