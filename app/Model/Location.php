<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = ['name','status','location','slug','avatar'];
    public function tours()
    {
        return $this->hasMany(TourCt::class,'location_id','id');
    }

}
