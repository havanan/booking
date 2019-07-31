<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Post;
use App\Model\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'tour_category_id' =>3,
            'limit' =>6
        ];
        $tour_cheap = $this->getTour($params);
        $params['tour_category_id'] = 1;
        $tour_domestic = $this->getTour($params);
        $params['tour_category_id'] = 2;
        $tour_inter = $this->getTour($params);
        $post = Post::where('status',1)->first();
        return view('frontend.home.index',compact('tour_cheap','tour_domestic','tour_inter','post'));
    }
    public function getTour($params)
    {
       $data =  Tour::whereHas('categories',function ($query) use ($params){
           $query->where('tour_category_id', '=', $params['tour_category_id']);
       })->orderBy('id','desc');
       if (isset($params['limit'])){
           $data = $data ->limit(6);
       }
        if (isset($params['paginate'])){
            $data = $data ->paginate($params['paginate']);
        }else{
            $data = $data->get();
        }

       return$data;
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
}
