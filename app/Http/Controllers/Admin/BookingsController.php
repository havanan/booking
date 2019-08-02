<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Booking::orderBy('id','desc')->get();
        return view('admin.booking.index',compact('data'));
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
        $info = Booking::findOrFail($id);
        $log = json_decode($info['log'],true);
        return view('admin.booking.view',compact('info','log'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Booking::findOrFail($id);
        $log = json_decode($info['log'],true);
        return view('admin.booking.edit',compact('info','log'));
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
    public function changeStatus($status,$id)
    {
        if (!in_array($status,[0,1])){
            $status = 'error';
            $message = 'Tạo thất bại';
            return back()->with($status,$message);
        }
        $info = Booking::findOrFail($id);
        $info->status = $status;
        $info->user_id = Auth::user()->id;
        if ($info->save()){
            $status = 'success';
            $message = 'Kích hoạt thành công';
        }else{
            $status = 'error';
            $message = 'Kích hoạt thất bại';
        }
        return back()->with($status,$message);
    }
}
