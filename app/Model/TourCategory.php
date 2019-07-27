<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    protected $table = 'tour_categories';
    protected $fillable = ['name','status'];

}
