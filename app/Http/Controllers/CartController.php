<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
        public function index()
        {
            $cartItems = \Cart::getContent();
            return view('public.pages.cart.cart', compact('cartItems'));
        }


        public function add(Request $request)
        {
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                )
            ]);
            session()->flash('success', 'Product is Added to Cart Successfully !');

            return redirect()->route('cart.list');
        }

        public function update(Request $request)
        {
            $id = $request->input('id');
            $newQuantity = $request->input('quantity'); // get the new quantity

            Cart::update($id, $newQuantity); // update the cart

            return redirect()->route('cart.list')->with('success', 'Cart updated successfully.');
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