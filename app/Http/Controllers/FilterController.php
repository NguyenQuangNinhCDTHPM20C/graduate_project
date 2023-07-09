<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Laptop;
use App\Models\Brand;

class FilterController extends Controller
{
    public function filterProducts(Request $request)
    {
        $category = $request->category;
        $cpu_brand = $request->cpu_brand;
        $brand = $request->brand;
        $price = $request->input('price');
        $color = $request->input('color');

        $query = Product::query();

        if ($category) {
            $seacrh_category = Category::where('slug', $category)->first();
            $query->where('category_id', $seacrh_category->id);
        }

        if ($cpu_brand) {
            $seacrh_category = Category::where('type', 'laptop')->first();
            $query->where('category_id', $seacrh_category->id);
            $search_laptop = Laptop::where('cpu_brand', 'like', '%' . $cpu_brand . '%')->get();
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
                case '8_to_10' : $query->whereBetween('discount_price', [5000000, 6000000]);break;
                case '_to_6' : $query->whereBetween('discount_price', [5000000, 6000000]);break;
                case '8_to_6' : $query->whereBetween('discount_price', [5000000, 6000000]);break;
            }
            
        }

        if ($color) {
            $query->whereIn('color', $color);
        }

        return $query;
    }
}