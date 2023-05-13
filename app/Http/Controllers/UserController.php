<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
class UserController extends Controller
{
    // Show home
    public function index(){
        // Get all products and count the number of products of each type
        $products = Product::all();
        $category = \DB::table('category')
        ->leftJoin('products', 'category.id', '=', 'products.category_id')
        ->select('category.id', 'category.name', \DB::raw('count(products.id) as total'))
        ->groupBy('category.id', 'category.name')
        ->get();
         // Return view index with products and number of products of each type
         return view('Public.pages.index', [
            'products' => $products,
            'category' => $category
        ]);
    }
    
    // Show product detail 
    public function product_detail($id){
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }

        return view('public.pages.product.product-detail', compact('product'));
    }

}