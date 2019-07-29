<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['name','avatar','summary','content','location_id','author_id','category_id','status','view'];

}
