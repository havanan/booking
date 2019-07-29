<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Location;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view('admin.posts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->pluck('name','id');
        $locations = Location::where('status',1)->pluck('name','id');
        return view('admin.posts.create',compact('categories','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('name','avatar','summary','content','location_id','category_id','status','view');
        $input['author_id'] = Auth::user()->id;
        $input['slug'] = Str::slug($input['name']);
        $creat = Post::create($input);
        if ($creat){
            $status = 'success';
            $message = 'Tạo thành công';
            return redirect()->route('admin.post.index')->with($status,$message);
        }else{
            $status = 'error';
            $message = 'Tạo thất bại';
            return back()->with($status,$message);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Post::with('location')->find($id);
        return view('admin.posts.view',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Post::with('location')->find($id);
        $categories = Category::where('status',1)->pluck('name','id');
        $locations = Location::where('status',1)->pluck('name','id');
        return view('admin.posts.edit',compact('info','categories','locations'));

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
        $input = $request->only('name','avatar','summary','content','location_id','category_id','status','view');
        $input['author_id'] = Auth::user()->id;
        $input['slug'] = Str::slug($input['name']);
        $update = Post::where('id',$id)->update($input);
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
        $info = Post::find($id);
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
