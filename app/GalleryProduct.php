<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryProduct extends Model
{
    protected $fillable=[
        'product_id','main','path'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
     }
}
