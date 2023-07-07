<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\InvoiceDetail;
use App\Models\Image;
use App\Models\Laptop;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        $brands = Brand::all();
        $category = Category::all();
        $sub_category = SubCategory::all();
        return view('Admin.pages.product.product-list', compact('products', 'brands', 'category', 'sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $category = Category::all();
        $sub_category = SubCategory::all();
        return view('Admin.pages.product.add-product', compact('brands', 'category', 'sub_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
    
        $product->name = $request->input('name');
        $product->code = $request->input('code');
        $product->quantity = $request->input('quantity');
        $product->selling_price = $request->input('selling_price');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        
        $product->slug = Str::slug($request->input('name'), '-');
        $existingSlug = Product::where('slug', $product->slug)->first();
        if ($existingSlug) {
            $product->slug .= '-' . uniqid();
        }

        $discountType = $request->input('discount_price');
        switch($discountType)
        {
            case '0':$discountAmount = 0; break;
            case '10':$discountAmount = 10; break;
            case '20':$discountAmount = 20; break;
        }
        $discountedPrice =  $product->selling_price - $discountAmount;
        $product->discount_price = $discountedPrice;
        
        $categoryName = $request->input('category');
        $brandName = $request->input('brand');
        $subCategoryName = $request->input('sub_category');
    
        $category = Category::where('name', $categoryName)->first();
        $brand = Brand::where('name', $brandName)->first();
        $subCategory = SubCategory::where('name', $subCategoryName)->first();
    
        $product->category_id = $category->id;
        $product->brand_id = $brand->id;
        $product->sub_category_id = $subCategory->id;
        $product->save();
        
        $insert = [] ;
        if ($product->save()) {
            if($request->hasfile('images'))
            {
                foreach ($request->file('images') as $key => $file) {
                    $file_name = time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path('assets/product/'), $file_name);
                
                    $image = new Image;
                    $image->entity_type = 'product';
                    $image->entity_id = $product->id;
                    $image->image_path = 'assets/product/'.$file_name;
                    $image->save();
                    $featuredImageIndex = $request->input('featured_image_'.$key);
                    if ($featuredImageIndex !== null && $featuredImageIndex == $key) {
                        $product->featured_image_id = $image->id;
                        $product->save();
                    }
                }                
            }
            Image::insert($insert);
        }

        $is_laptop = $request->input('is_laptop');
        if($is_laptop){
            $laptop = new Laptop;
            $laptop->product_id = $product->id;
            $laptop->cpu_brand = $request->input('cpu_brand');
            $laptop->cpu_series = $request->input('cpu_series');
            $laptop->cpu_model = $request->input('cpu_model');
            $laptop->cpu_base_clock = $request->input('cpu_base_clock');
            $laptop->cpu_cache = $request->input('cpu_cache');
            $laptop->cpu_max_clock = $request->input('cpu_max_clock');
            $laptop->cpu_cores = $request->input('cpu_cores');
            $laptop->cpu_threads = $request->input('cpu_threads');
            $laptop->ram_size = $request->input('ram_size');
            $laptop->ram_standard = $request->input('ram_standard');
            $laptop->ram_speed = $request->input('ram_speed');
            $laptop->storage_capacity = $request->input('storage_capacity');
            $laptop->ram_socket_type = $request->input('ram_socket_type');
            $laptop->storage_type = $request->input('storage_type');
            $laptop->display_size = $request->input('display_size');
            $laptop->display_resolution = $request->input('display_resolution');
            $laptop->display_technology = $request->input('display_technology');
            $laptop->refresh_rate = $request->input('refresh_rate');
            $laptop->graphics_vram = $request->input('graphics_vram');
            $laptop->onboard_graphics = $request->input('onboard_graphics');
            $laptop->dedicated_graphics = $request->input('dedicated_graphics');
            $laptop->wireless_connectivity = $request->input('wireless_connectivity');
            $laptop->operating_system = $request->input('operating_system');
            $laptop->dimensions = $request->input('dimensions');
            $laptop->weight = $request->input('weight');
            $laptop->battery_capacity = $request->input('battery_capacity');
            $laptop->save();            
        }
        return redirect()->route('product.list')->with('success', 'Product has been added successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $images = Image::where('entity_id', $product->id)->get();
        if (!$product) {
            abort(404);
        }
        return view('admin.pages.product.product-detail', compact('product', 'images'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $category = Category::all();
        $sub_category = SubCategory::all();
        $brands = Brand::all();
        $discount_percentage = (($product->selling_price - $product->discount_price) / $product->selling_price) * 100;
        return view('admin.pages.product.edit-product', compact('product', 'category', 'sub_category', 'brands', 'discount_percentage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->code = $request->input('code');
        $product->quantity = $request->input('quantity');
        $product->selling_price = $request->input('selling_price');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        $product->tag = $request->tag;
        
        $product->slug = Str::slug($request->input('name'), '-');
        $existingSlug = Product::where('slug', $slug)->first();
        if ($existingSlug) {
            $product->slug .= '-' . uniqid();
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = Str::slug($product->name) . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->move(public_path('assets/product/'), $fileName);
            $product->image = $fileName;
        }
    
        $discountType =$request->input('discount_price');
        switch($discountType)
        {
            case '0':$discountAmount = 0; break;
            case '10':$discountAmount = 10; break;
            case '20':$discountAmount = 20; break;
        }
        $discountedPrice =  $product->selling_price - $discountAmount; // Tính giá sau khi giảm giá
        // Lưu giá sau khi giảm giá vào trường discount_price trong cơ sở dữ liệu
        $product->discount_price = $discountedPrice;
        
        $categoryName = $request->input('category');
        $brandName = $request->input('brand');
        $subCategoryName = $request->input('sub_category');
       
        $category = Category::where('name', $categoryName)->first();
        if($category != null){
            $product->category_id = $category->id;
        }
        
        $brand = Brand::where('name', $brandName)->first();
        if($brand != null){
            $product->brand_id = $brand->id;
        }

        $subCategory = SubCategory::where('name', $subCategoryName)->first();
        if($subCategory != null){
            $product->sub_category_id = $subCategory->id;
        }
            $product->save();

        return redirect()->route('product.list')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InvoiceDetail::where('product_id', $id)->update(['product_id' => null]);
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.list')->with('Product has been deleted successfully');
    }
}