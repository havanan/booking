<?php

namespace App\Http\Controllers\Frontend;

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
        $info = Post::where('slug','like','%'.$slug.'%')->first();
        return view('frontend.posts.view',compact('info'));
    }
}
