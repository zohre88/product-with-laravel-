<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title','slug','category_id','description','image'
    ];
    public function galleries(){
        return $this->hasMany(GalleryProduct::class)->orderBy('main', 'DESC');
   }

   public function category()
   {
        return $this->belongsTo(ProductCategory::class);
   }
   public function path()
   {
        return route('product.detail' , [$this->id , $this->slug]);
   }
}
