<?php

namespace App\Http\Controllers\admin;

use App\GalleryProduct;
use App\Product;
use App\ProductCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Product';
        $categories=ProductCategory::all();
        return view('admin.products.create',compact('categories','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('images')){
            foreach($request->images as $image){
                $fileName=$image->getClientOriginalName();
                $images[]=$image->storeAs('product/image',$fileName,'publicDrive');
            }
        }
        $product=Product::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'category_id'=>$request->category,
            'description'=>$request->description,
            'image'=>$images[0]??null,
        ]);
        
        if($request->hasFile('images')){
            foreach($images as $key=>$image){
                $product->galleries()->create([
                    'path' => $image,
                    'main' => $key == 0,
                ]);
            }
        }

        return redirect()->route('product.index')->with('success','You successfuly add record');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $banner='Edit Product';
        $categories=ProductCategory::all();
        return view('admin.products.edit',compact('product','categories','banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $product = Product::findOrFail($id);
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $fileName=$image->getClientOriginalName();
                $product->galleries()->create([
                    'path' => $image->storeAs('product/image',$fileName,'publicDrive'),
                    'main' => 0,
                ]);
            }
        }
        
        if ($product->image != $request->main) {
            foreach ($product->galleries as $gallery) {
                $gallery->update([
                    'main' => $request->main == $gallery->path ? 1 : 0
                ]);
            }
            $mainPicture = $request->main;
        }
      

        $product->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'category_id'=>$request->category,
            'description'=>$request->description,
            'image'=>$mainPicture ?? $product->image,
        ]);
        session()->flash('success', 'Product Updated SuccessFully');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->galleries) {
            foreach ($product->galleries as $image) {
                File::delete($image->path);
                $image->delete();
            }
        }
        $product->delete();
        session()->flash('success', 'Product Deleted SuccessFully');
        return back();
    }
    public function deleteImage($id)
    {
        $image=GalleryProduct::findOrfail($id);
        try{
            if($image->main==1){

            }
            File::delete($image->path);
            $image->delete();
        }catch(Exception $e){
            return $e->getMessage();
        }
        return back();
    }
}
