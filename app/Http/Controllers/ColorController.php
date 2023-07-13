<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = Color::get();
        return view('Admin.pages.product.color.color-list', compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.product.color.add-color');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = new Color;
    
        $color->name = $request->input('name');
        $color->slug = Str::slug($request->input('name'), '-');
       
        $color->save();
        return redirect()->route('category.list')->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $color = Color::where('slug', $slug)->first(); 
        return view('Admin.pages.product.color.edit-color', compact( 'color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($category->name) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/category/'), $fileName);
            $category->image = $fileName;
        }
        $category->type = $request->input('type');
        $category->slug = Str::slug($request->input('name'), '-');
        $category->status = $request->input('status');
       
        $category->save();
        return redirect()->route('category.list')->with('success', 'Category updateed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        Product::where('category_id', $id)->update(['category_id' => null]);
        Subcategory::where('category_id', $id)->update(['category_id' => null]);
        Blog::where('category_id', $id)->update(['category_id' => null]);
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.list')->with('Category has been deleted successfully');
    }
}
