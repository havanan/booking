<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['name','avatar','summary','content','location_id','author_id','category_id','status','view','slug'];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
}
