<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Favorite;
use App\Models\FavoriteDetail;
use App\Models\Invoice;
use App\Models\Review;
use App\Models\Account;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
class UserController extends Controller
{
    // Show home
    public function index(){
        $products = Product::all();
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $brands = Brand::all();
        $category = \DB::table('category')
        ->leftJoin('products', 'category.id', '=', 'products.category_id')
        ->select('category.id', 'category.name', 'category.image', \DB::raw('count(products.id) as total'))
        ->groupBy('category.id', 'category.name', 'category.image')
        ->get();
         // Return view index with products and number of products of each type
         return view('Public.pages.index', [
            'products' => $products,
            'category' => $category,
            'brands' => $brands,
            'new_products' => $newProducts
        ]);
    }
    
    // Show product detail 
    public function product_detail($id){
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $reviews = Review::where('product_id', $id)->get();
        $review_count = Review::where('product_id', $id)->count();
        return view('public.pages.product.product-detail', compact('product', 'reviews', 'review_count'));
    }

    // Get list order for user
    public function orders(){
        $account_id = session('account')->id;
    $orders = Invoice::where('account_id', '=', $account_id)->get();

    foreach ($orders as $order) {
        $order->order_date = Carbon::parse($order->order_date)->format('d/m/Y');
    }

    return view('public.pages.account.order', compact('orders'));

    }
}