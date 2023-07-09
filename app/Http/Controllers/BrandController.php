<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::paginate(10);
        return view('Admin.pages.brand.brand-list', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.brand.add-brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
    
        $brand->name = $request->input('name');
        $brand->slug = Str::slug($request->input('name'), '-');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($brand->name) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/brand/'), $fileName);
            $brand->image = 'assets/brand/'.$fileName;
        }
       
        $brand->save();
        return redirect()->route('brand.list')->with('success', 'Brand has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $brand = Brand::where('slug', $slug)->first(); 
        return view('Admin.pages.brand.edit-brand', compact( 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
    
        $brand->name = $request->input('name');
        $brand->slug = Str::slug($request->input('name'), '-');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = Str::slug($brand->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/brand/'), $file_name);
        
            if ($brand->image && File::exists(public_path($brand->image))) {
                File::delete(public_path($brand->image));
            }
        
            $brand->image = 'assets/brand/'.$file_name;
        }
       
        $brand->save();
        return redirect()->route('brand.list')->with('success', 'Brand has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('brand_id', $id)->update(['brand_id' => null]);
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brand.list')->with('Brand has been deleted successfully');
    }
}