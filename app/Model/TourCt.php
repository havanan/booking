<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TourCt extends Model
{
    protected $table = 'tour_ct';
    protected $fillable = ['tour_id','tour_category_id'];

}
