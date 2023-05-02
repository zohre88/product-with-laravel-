<?php

namespace App\Http\Controllers\front;

use App\Ean;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home');
    }
    public function aboutUs(){
        return view('front.aboutus');
    }
   
    public function showCategory($slug)
    {
        $mainCategory=$slug;
        if($slug=='gefriergetrocknet'){
            $category =ProductCategory::where('slug', $slug)->first();
            $products=Product::whereIn('category_id',[5,6])->get();
        }else{
            $category =ProductCategory::where('slug', $slug)->first();
            $products=Product::where('category_id',$category->id)->get();
        }
        return view('front.category',compact('products','category'));
    }
    public function detailProduct($id){
        
        $product =Product::findOrFail($id);
        $eans=Ean::where('category_id',$product->category_id)->get();
        // dd($product);
        return view('front.detail-product' , compact('product','eans'));
     }
     public function showPage($page){
        $recipes=null;
        if($page=='rezepte'){
            $recipes=Recipe::all();
        }
       return view('front.'.$page,compact('page','recipes'));
     }
    
    public function showProducts(ProductCategory $productCategory)
        {

            $products = ProductCategory::whereHas('products' , function($query) use ($productCategory){
                return $query->with('child')->where('category_id' , $productCategory->id);
            })->latest()->paginate();
            dd($products);
            return view('front.category', compact('products'));
    }
    
}
