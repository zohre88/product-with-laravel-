<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable=[
        'name','slug','parent_id'
    ];

    public function parentCategory(){
        return $this->belongsTo(ProductCategory::class , 'parent_id');
    }
    public function child(){
        return $this->hasMany(ProductCategory::class,'parent_id');
    }
    public function getparentAttribute()
    {
        return (is_null($this->parentCategory)) ? 'Null' : $this->parentCategory->name;
    }
    public function products(){
        return $this->hasMany(Product::class , 'id');
    }
}
