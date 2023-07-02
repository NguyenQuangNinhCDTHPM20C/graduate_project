<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use App\Models\Cart;
// use App\Models\CartDetail;
use App\Models\Product;

class CartController extends Controller
{
    // public function index()
    // {
    //     $account_id = session('account')->id;
    //     $cart_infor = Cart::where('account_id', $account_id)->first();
    //     $cart_items = [];
    //     $cart_total = 0.0;
    //     if($cart_infor){
    //         $cart_items = CartDetail::where('cart_id', $cart_infor->id)->get();
    //         foreach($cart_items as $item)
    //             $cart_total += $item->quantity * $item->price;
    //     }
    //     return view('public.pages.cart.index', compact('cart_items', 'cart_total'));
    // }

    // public function add(Request $request)
    // {
    //     $product_id = $request->input('product_id');
    //     $account_id = session('account')->id;

    //     $cart = Cart::firstOrCreate(['account_id' => $account_id]);

    //     $existing_cart_item = CartDetail::where('cart_id', $cart->id)
    //     ->where('product_id', $product_id)
    //     ->where('color', $request->input('color'))
    //     ->first();
        
    //     if ($existing_cart_item) {
    //         $existing_cart_item->quantity += $request->input('quantity');
    //         $existing_cart_item->save();
    //         return redirect()->back()->with('success', 'Product updated quantity to cart');
    //     }else {
    //         $cart_detail = new CartDetail();
    //         $cart_detail->cart_id = $cart->id;
    //         $cart_detail->product_id = $product_id;
    //         $cart_detail->color = $request->input('color');
    //         $cart_detail->quantity = $request->input('quantity');
    //         $cart_detail->price = $request->input('price');
    //         $cart_detail->save();
    //         return redirect()->back()->with('success', 'Product added to cart');
    //     } 
    //     return redirect()->back()->with('error', 'Product not add to cart');
    // }

    // public function update(Request $request)
    // {
    //     $cart_item = CartDetail::findOrFail($request->input('id'));
        
    //     $cart_item->quantity = $request->input('quantity');
    //     $cart_item->save();
    //     return redirect()->back()->with('success', 'Updated cart successfuly!');
    // }

    // public function remove($id)
    // {
    //     $cart_detail = CartDetail::where('id', $id)->first();

    //     if ($cart_detail) {
    //         $cart_detail->delete();            
    //         return redirect()->back()->with('success', 'Product removed from cart successfuly! ');
    //     } 
    //     return redirect()->back()->with('error', 'Product remove failed!');
    // }

    // public function clear($id)
    // {
    //     $cart_details = CartDetail::where('cart_id', $id)->get();

    //     if ($cart_detail) {
    //         foreach($cart_detail as $cart_detail)
    //                 $cart_detail->delete();            
    //         return redirect()->back()->with('success', 'Clear cart successfuly! ');
    //     } 
    //     return redirect()->back()->with('error', 'Cart clear failed!');
    // }

    //=================== method use darryldecode/Cart================================
        public function index()
        {
            $cartItems = \Cart::getContent();
            // dd($cartItems);
            return view('public.pages.cart.index', compact('cartItems'));
        }

        public function add(Request $request)
        {
            $cartItems = \Cart::getContent();

            foreach ($cartItems as $item) {
                // Kiểm tra nếu sản phẩm có cùng ID và khác màu sắc đã tồn tại trong giỏ hàng
                if ($item->id === $request->id && $item->attributes->color !== $request->color) {
                    continue; // Bỏ qua mục hiện tại và kiểm tra các mục khác
                }
            }

            // Thêm mục mới vào giỏ hàng
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => [
                    'image' => $request->image,
                    'color' => $request->color,
                ]
            ]);

            session()->flash('success', 'Product is Added to Cart Successfully!');
            return redirect()->route('cart.list');
        }
        

        public function update(Request $request)
        {
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
    
            session()->flash('success', 'Item Cart is Updated Successfully !');
    
            return redirect()->route('cart.list');
        }


        public function remove(Request $request)
        {
            \Cart::remove($request->id);
            session()->flash('success', 'Item Cart Remove Successfully !');

            return redirect()->route('cart.list');
        }

        public function clear()
        {
            \Cart::clear();

            session()->flash('success', 'All Item Cart Clear Successfully !');

            return redirect()->route('cart.list');
        }
}