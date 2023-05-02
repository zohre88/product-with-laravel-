<?php

namespace App\Http\Controllers\admin;

use App\ProductCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('ddd');
        $categories=ProductCategory::all();
        return view('admin.productCategory.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=ProductCategory::all();
        return view('admin.productCategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductCategory::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'parent_id'=>$request->parent
        ]);
        return redirect()->route('product-category.index')->with('success','You successfully add record');
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
    public function edit(ProductCategory $productCategory)
    {
        $categories=ProductCategory::all();
        return view('admin.productCategory.edit',compact('productCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $productCategory->update([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'parent_id'=>$request->parent
        ]);
        return redirect()->route('product-category.index')->with('success','You successfully update record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect()->route('product-category.index')->with('success','You successfully delete record');

    }
}
