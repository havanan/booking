<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TourCt extends Model
{
    protected $table = 'tour_ct';
    protected $fillable = ['tour_id','tour_category_id'];
    public function tour()
    {
        return $this->belongsTo(TourCt::class,'tour_id');
    }
    public function category()
    {
        return $this->belongsTo(TourCategory::class,'tour_category_id');
    }
}
