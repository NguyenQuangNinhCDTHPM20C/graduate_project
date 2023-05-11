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

    // Add product to cart
    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $cart = session()->get('cart');
        
        // If the product is not in the cart, please add it to the cart
        if(!$cart) {
            $cart = [$id => ["name" => $product->name,"quantity" => 1,"price" => $product->price,"photo" => $product->photo]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
        // If the cart already contains this product, increase the product quantity by 1
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
        //If the cart does not have this product, add a new product to the cart
        $cart[$id] = ["name" => $product->name, "quantity" => 1, "price" => $product->price, "photo" => $product->photo];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    //Remove cart
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        // Search product in the cart
        foreach($cart as $key => $item) {
            if ($item['id'] == $id) {
                // Remove product in the cart
                unset($cart[$key]);
                session()->put('cart', $cart);
                return;
            }
        }
    }

}