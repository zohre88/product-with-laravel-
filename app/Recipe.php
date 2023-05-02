<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=[
        'title','slug','date','content','image'
    ];
}
