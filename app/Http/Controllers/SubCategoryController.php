<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_category = SubCategory::where('status',1)->get();
        return view('admin.pages.subcategory.subcategory-list', compact('sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status', 1)->get();
        return view('Admin.pages.subcategory.add-subcategory', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub_category = new SubCategory;
        $subCategory = SubCategory::where('name', $request->input('category'))->first();
        $category = Category::where('name', $request->input('category'))->first();
        if($category != null){
            $sub_category->category_id = $category->id;
        }
        $sub_category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($category->name) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/subcategory/'), $fileName);
            $sub_category->image = 'assets/subcategory/'.$fileName;
        }
        $sub_category->slug = Str::slug($request->input('name'), '-');
        $sub_category->status = 1;
        
        $sub_category->save();
        return redirect()->route('subcategory.list')->with('success', 'Sub Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $sub_category = SubCategory::where('slug', $slug)->first();
        $category = Category::all();
        return view('admin.pages.subcategory.edit-subcategory', compact( 'sub_category','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sub_category = SubCategory::findOrFail($id);
        $category = Category::where('name', $request->input('category'))->first();
        if($category != null){
            $sub_category->category_id = $category->id;
        }
        $sub_category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = Str::slug($sub_category->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/subcategory/'), $file_name);
        
            if ($sub_category->image && File::exists(public_path($sub_category->image))) {
                File::delete(public_path($sub_category->image));
            }
        
            $sub_category->image = 'assets/subcategory/'.$file_name;
        }
        $sub_category->slug = Str::slug($request->input('name'), '-');
        $sub_category->status = 1;
        
        $sub_category->save();
        return redirect()->route('subcategory.list')->with('success', 'Sub Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Product::where('sub_category_id', $id)->update(['sub_category_id' => null]);
        // Blog::where('sub_category_id', $id)->update(['sub_category_id' => null]);
        $sub_category = SubCategory::findOrFail($id);
        $sub_category->status = 0;
        $sub_category->save();
        return redirect()->route('subcategory.list')->with('Sub Category has been deleted successfully');
    }
    
}