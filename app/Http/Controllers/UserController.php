<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\FavoriteDetail;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    // Show home
    public function index(){
        // $favorite_count = FavoriteController::getCount();
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
            'category' => $category,
            // 'favorite_count' => $favorite_count
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

    // Add product to favorite
    

    public function add_to_favorite(Request $request)
    {
        $productId = $request->input('product_id');
        $accountId = 2;

        // Get favorite of user
        $favorite = Favorite::where('account_id', $accountId)->first();

        if ($favorite) {
            // Get ID favorite
             $favoriteId = $favorite->id;

             // Add product to favorite_detail
             $favoriteDetail = new FavoriteDetail();
             $favoriteDetail->favorite_id = $favoriteId;
             $favoriteDetail->product_id = $productId;
             $favoriteDetail->save();
        } else {
            // Create new favorit and add account
            $favorite = new Favorite();
            $favorite->account_id = $accountId;
            $favorite->save();

            // Get ID favorite
            $favoriteId = $favorite->id;

            // Add product to favorite_detail
            $favoriteDetail = new FavoriteDetail();
            $favoriteDetail->favorite_id = $favoriteId;
            $favoriteDetail->product_id = $productId;
            $favoriteDetail->save();
        }

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào mục yêu thích.');
    }
    
    //Show count favorite product
    public function get_favorite_count()
    {
        $favorites = FavoriteDetail::join('favorites', 'favorite_details.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', '2')
        ->count();
        $count = count($favorites);

        return response()->json(['count' => $count]);
    }

}