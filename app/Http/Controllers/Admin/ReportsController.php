<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use App\Model\Post;
use App\Model\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index(){
        $topPrice = Booking::with('tour')
            ->where('status',1)
            ->groupBy('tour_id')
            ->select('tour_id')
            ->selectRaw('sum(total_price) as total')
            ->get();
        $dataTopPrice = $this->makeTourChar($topPrice);
        //lấy data tour đã kích hoạt theo mốc thời gian
        $booking_daily = $this->getMoneyByTime([Carbon::now()->format('Y-m-d'),Carbon::now()->addDay()->format('Y-m-d')]);
        $booking_weekly = $this->getMoneyByTime([Carbon::now()->startOfWeek()->format('Y-m-d'),Carbon::now()->endOfWeek()->format('Y-m-d')]);
        $booking_monthly = $this->getMoneyByTime([Carbon::now()->startOfMonth()->format('Y-m-d'),Carbon::now()->endOfMonth()->format('Y-m-d')]);
        $booking_yearly = $this->getMoneyByTime([Carbon::now()->startOfYear()->format('Y-m-d'),Carbon::now()->endOfYear()->format('Y-m-d')]);
        //tính tổng tiền theo mốc thời gian
        $price_daily = $booking_daily->sum('total_price');
        $price_weekly = $booking_weekly->sum('total_price');
        $price_monthly = $booking_monthly->sum('total_price');
        $price_yearly = $booking_yearly->sum('total_price');
        return view('admin.report.index',compact('dataTopPrice','price_daily','price_weekly','price_monthly','price_yearly'));

    }
    public function byLocation(){
        $topTourLocation = Tour::with(['location'])
            ->groupBy('location_id')
            ->select('location_id')
            ->selectRaw('Count(id) as total')
            ->get();
        $dataTourLocation = $this->makeLocationChar($topTourLocation);
        $topPostLocation = Post::with(['location'])
            ->groupBy('location_id')
            ->select('location_id')
            ->selectRaw('Count(id) as total')
            ->get();
        $dataPostLocation = $this->makeLocationChar($topPostLocation);

        return view('admin.report.by_location',compact('dataTourLocation','dataPostLocation'));
    }
    public function makeLocationChar($input){
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
    public function makeTourChar($input){
        $data = array();
        if (!empty($input)){
            foreach ($input as $key => $item){
                $data[$key][0] = $item->tour != null ? $item->tour->name : 'khác-'.$key;
                $data[$key][1] = (float)$item->total;
            }
        }
        $data = json_encode($data);
        return $data;
    }
    public function getMoneyByTime(array $time){
        $data = Booking::where('status',1)
                ->whereBetween('updated_at',$time)
                ->get();
        return $data;
    }

}
