<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\DiscountCode;

class CartController extends Controller
{
        public function index()
        {
            $cartItems = \Cart::getContent();
            $discount_codes = DiscountCode::get();
            return view('public.pages.cart.index', compact('cartItems', 'discount_codes'));
        }

        public function add(Request $request)
        {
            $cartItems = \Cart::getContent();

            foreach ($cartItems as $item) {
                if ($item->id === $request->id && $item->attributes->color !== $request->color) {
                    continue; 
                }
            }

            $product = Product::where('id', $request->id)->first();
            if($product->quantity < $request->quantity){
                session()->put('error', 'Sản phẩm không đủ số lượng');
            }else{
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
                session()->put('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
            }
            return redirect()->back();
        }
        

        public function update(Request $request)
        {
            $product = Product::where('id', $request->id)->first();
            // dd($product->quantity < $request->quantity);
            if($product->quantity < $request->quantity){
                session()->put('error', 'Sản phẩm không đủ số lượng');
            }else{
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
            session()->put('success', 'Cập nhật giỏ hàng thành công!');
            }
            return redirect()->route('cart.list');
        }


        public function remove(Request $request)
        {
            \Cart::remove($request->id);
            session()->put('success', 'Đã xóa sản phẩm khỏi giỏ hàng!');

            return redirect()->route('cart.list');
        }

        public function clear()
        {
            \Cart::clear();

            session()->put('success', 'Xóa giỏ hàng thành công !');

            return redirect()->route('cart.list');
        }
}