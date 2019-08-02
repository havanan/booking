<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    public function getBookingInfo($id){
        $booking = Booking::findOrFail($id);
        return view('frontend.tour.book_result',compact('booking'));
    }
}
