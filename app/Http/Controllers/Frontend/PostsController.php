<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function view($slug)
    {
        $info = Post::where('slug','like','%'.$slug.'%')->where('status',1)->first();
        $category = Category::where('status',1)->pluck('name','slug');
        return view('frontend.posts.view',compact('info','category'));
    }
    public function getAllCat(){
        $data = Post::where('status',1)->paginate(12);
        return view('frontend.posts.list',compact('data'));

    }
    public function getByCat($slug){
        $info = Category::where('slug','like','%'.$slug.'%')->where('status',1)->first();
        $cat_id = $info['id'];
        $data = Post::where('status',1)->where('category_id',$cat_id)->paginate(12);
        return view('frontend.posts.list',compact('data'));
    }
    public function getByLocation($slug){
        $info = Category::where('slug','like','%'.$slug.'%')->where('status',1)->first();
        $cat_id = $info['id'];
        $data = Post::where('status',1)->where('category_id',$cat_id)->paginate(12);
        return view('frontend.posts.list',compact('data'));
    }
}
