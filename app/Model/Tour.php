<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $fillable = ['name','slug'];

}
