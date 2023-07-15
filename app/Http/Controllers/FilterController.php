<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Laptop;
use App\Models\Brand;

class FilterController extends Controller
{
    public function filterProducts(Request $request)
    {
        $category = $request->category;
        $cpu_brand = $request->cpu_brand;
        $brand = $request->brand;
        $price = $request->price;
        $sub_category = $request->sub_category;
        $display_resolution = $request->display_resolution;
        $display_size = $request->display_size;
        $ram_size = $request->ram_size;
        $dedicated_graphic = $request->dedicated_graphic;
        $storage_capacity = $request->storage_capacity;
        $sort = $request->sort;
        $query = Product::query();

        if ($category) {
            $seacrh_category = Category::where('slug', $category)->first();
            $query->where('category_id', $seacrh_category->id);
        }

        if ($cpu_brand) {
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('cpu_brand', 'like', '%' . $cpu_brand . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if ($brand) {
            $search_brand = Brand::where('name', 'like', '%' . $brand . '%')->first();
            $query->where('brand_id', $search_brand->id);
        }

        if ($price) {
            switch($price){
                case 'more_than_100': $query->where('discount_price', '>', 100000000);break;
                case '3_to_4' : $query->whereBetween('discount_price', [3000000, 4000000]);break;
                case '5_to_6' : $query->whereBetween('discount_price', [5000000, 6000000]);break;
                case '6_to_8' : $query->whereBetween('discount_price', [6000000, 8000000]);break;
                case '8_to_10' : $query->whereBetween('discount_price', [8000000, 10000000]);break;
                case '10_to_12' : $query->whereBetween('discount_price', [10000000, 12000000]);break;
                case '12_to_15' : $query->whereBetween('discount_price', [12000000, 15000000]);break;
                case '15_to_20' : $query->whereBetween('discount_price', [15000000, 20000000]);break;
                case '20_to_100' : $query->whereBetween('discount_price', [20000000, 100000000]);break;
            } 
        }

        if ($sub_category) {
            $seacrh_sub_category = SubCategory::where('name', 'like', '%' . $sub_category . '%')->first();
            $query->where('sub_category_id', $seacrh_sub_category->id);
        }

        if($display_resolution){
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('display_resolution', 'like', '%' . $display_resolution . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if($display_size){
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('display_size', 'like', '%' . $display_size . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if($ram_size){
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('ram_size', 'like', '%' . $ram_size . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if($dedicated_graphic){
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('dedicated_graphics', 'like', '%' . $dedicated_graphic . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if($storage_capacity){
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('storage_capacity', 'like', '%' . $storage_capacity . '%')->pluck('product_id');
            $query->whereIn('id', $search_laptop);
        }

        if($sort){
            switch($sort){
                case 'defaut' :  $query->orderBy('created_at', 'DESC');break;
                case 'low_to_high_price' : $query->orderBy('discount_price', 'ASC');break;
                case 'hight_to_low_price' : $query->orderBy('discount_price', 'DESC');break;
            }
        }

        return $query;
    }
}