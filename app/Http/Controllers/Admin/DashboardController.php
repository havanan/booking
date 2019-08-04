<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use App\Model\Customer;
use App\Model\Post;
use App\Model\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price_total = Booking::where('status',1)->sum('total_price');
        $customer_total = Customer::where('status',1)->count();
        $tour_total = Tour::where('status',1)->count();
        $blog_total = Post::where('status',1)->count();
        $data = Booking::orderBy('id','desc')->where('status',0)->get();
//        dd($data[0]);
        return view('admin.dashboard.index',compact('price_total','customer_total','tour_total','blog_total','data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function icon()
    {
        return view('admin.dashboard.icon');
    }
    public function tiendo()
    {
        return view('admin.dashboard.tiendo');
    }
}
