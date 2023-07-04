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