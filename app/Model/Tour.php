<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name','slug','avatar','start_date','vehicle','slide','service','start_address','content','price','price_discount','price_children','price_baby','location_id','status','time'];

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
    public function categories()
    {
        return $this->hasMany(TourCt::class,'tour_id','id');
    }
}
