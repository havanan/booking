<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Service;
use App\Model\Tour;
use App\Model\TourCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToursController extends Controller
{
   public function getByCat($slug){
       $info = TourCategory::where('slug','like','%'.$slug.'%')->first();
       $tour_category_id = null;
       if (!empty($info)){

           $tour_category_id = $info['id'];
       }
       $params = [
            'tour_category_id' => $tour_category_id,
            'paginate' => 12
       ];
       $data = $this->getTour($params);
       return view('frontend.tour.index',compact('data','info'));
   }
    public function getTour($params)
    {
        $data =  Tour::orderBy('id','desc');
        if (isset($params['tour_category_id'])){
          $data = $data-> whereHas('categories',function ($query) use ($params){
                $query->where('tour_category_id', '=', $params['tour_category_id']);
            });
        }
        if (isset($params['name'])){
            $data = $data ->where('name','like','%'.$params['name'].'%');
        }
        if (isset($params['service'])){
            $data = $data ->where('service','like','%'.$params['service'].'%');
        }
        if (isset($params['name']) and $params['name'] != null){
            $data = $data ->where('name','like','%'.$params['name'].'%');
        }
        if (isset($params['location']) and $params['location'] != null){
            $data = $data ->whereIn('location',$params['location']);
        }
        if (isset($params['price_gr'])){
          $data = $data->where(function ($query) use($params) {
                    $query->whereBetween('price', $params['price_gr'])
                    ->orwhereBetween('price_discount', $params['price_gr']);
            });
        }
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
    public function find(Request $request){
        $services_selected= array();
        $params = $request->only('name','tour_category_id');

       $price = $request->price;
       $service = $request->service;
       $info = TourCategory::find($request->tour_category_id);
       if ($price != null){
           $price_gr = explode(';',$price);
           $params['price_gr'] = $price_gr;
       }
       if (!empty($service)){
           $params['service'] = json_encode($service);
       }
        $params['paginate'] = 12;
        $data = $this->getTour($params);
        if ($service != null){
            $services_selected = array_flip($service);
        }
        return view('frontend.tour.index',compact('data','info','params','services_selected'));

    }
}
