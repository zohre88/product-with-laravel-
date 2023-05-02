<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ean extends Model
{
    protected $fillable=[
        'art','title','category_id','VPE','code_product','code_VPE'
    ];
}
