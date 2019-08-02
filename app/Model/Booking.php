<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['tour_id','customer_id','user_id','status','amount','booking_date','start_date','total_price','discount','note','log'];

    public function author()
    {
        return $this->belongsTo(User::class,'user_id')->select('name','id','avatar','status');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id')->select('name','id','avatar','status','address','phone','email');
    }
    public function tour()
    {
        return $this->belongsTo(Tour::class,'tour_id')->select('name','id','avatar','status');
    }
}
