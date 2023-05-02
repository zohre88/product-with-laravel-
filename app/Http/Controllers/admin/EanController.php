<?php

namespace App\Http\Controllers\admin;

use App\Ean;
use App\Http\Controllers\Controller;
use App\ProductCategory;
use Illuminate\Http\Request;

class EanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eans=Ean::all();
        return view('admin.ean.index',compact('eans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=ProductCategory::all();
        return view('admin.ean.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ean::create([
            'art'=>$request->art,
            'title'=>$request->title,
            'category_id'=>$request->category,
            'code_VPE'=>$request->code_VPE,
            'code_product'=>$request->code_product,
            'VPE'=>$request->VPE
        ]);
        return redirect()->route('ean.index')->with('success','You successfully add record');
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
    public function edit(Ean $ean)
    {
        $categories=ProductCategory::all();
        return view('admin.ean.edit',compact('categories','ean'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ean $ean)
    {
        $ean->update([
            'art'=>$request->art,
            'title'=>$request->title,
            'category_id'=>$request->category,
            'code_VPE'=>$request->code_VPE,
            'code_product'=>$request->code_product,
            'VPE'=>$request->VPE
        ]);
        return redirect()->route('ean.index')->with('success','You successfully update record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ean $ean)
    {
        $ean->delete();
        return redirect()->route('ean.index')->with('success','You successfully delete record');

    }
}
