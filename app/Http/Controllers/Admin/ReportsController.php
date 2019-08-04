<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use App\Model\Post;
use App\Model\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function byLocation(){
        $topTourLocation = Tour::with(['location'])
            ->groupBy('location_id')
            ->select('location_id')
            ->selectRaw('Count(id) as total')
            ->get();
        $dataTourLocation = $this->makeBarChar($topTourLocation);
        $topPostLocation = Post::with(['location'])
            ->groupBy('location_id')
            ->select('location_id')
            ->selectRaw('Count(id) as total')
            ->get();
        $dataPostLocation = $this->makeBarChar($topPostLocation);

        return view('admin.report.by_location',compact('dataTourLocation','dataPostLocation'));
    }
    public function makeBarChar($input){
        $data = array();
        if (!empty($input)){
            foreach ($input as $key => $item){
                $data[$key][0] = $item->location != null ? $item->location->name : 'khác-'.$key;
                $data[$key][1] = (float)$item->total;
            }
        }
        $data = json_encode($data);
        return $data;
    }
}
