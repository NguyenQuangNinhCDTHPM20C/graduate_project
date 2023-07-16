<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCode;
class DiscountCodeController extends Controller
{
    public function index()
    {
        $discount_code = DiscountCode::get();
        return view('Admin.pages.discount-codes.discountcodes-list', compact('discount_code'));
    }
    public function create()
    {
        return view('Admin.pages.discount-codes.add-discountcodes');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = $request->input('code');
        $exitsting_discount_code = DiscountCode::where('code',$code)->first();
        if($exitsting_discount_code)
        {
            session()->put('error', 'Mã giảm giá đã tồn tại!');
        }
        else{
        $discount_code = new DiscountCode;
        $discount_code->code = $code;
        $discount_code->discount_amount = $request->input('discountamount');
        $discount_code->save();
        session()->put('success', 'Mã giảm giá đã được tạo!');
        }
        return redirect()->route('discountcode.list');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(DiscountCode $discount_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discount_code = DiscountCode::findOrFail($id);
        return view('Admin.pages.discount-codes.edit-discountcodes', compact( 'discount_code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DiscountCode  $discount_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discount_code = DiscountCode::findOrFail($id);
        $discount_code->code = $request->input('code');
        $discount_code->discount_amount = $request->input('discountamount');
        $discount_code->save();
        session()->put('success', 'Mã giảm giá đã được cập nhật!');
        return redirect()->route('discountcode.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscountCode $discount_code
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $discount_code = DiscountCode::findOrFail($id);
        $discount_code->delete();
        return redirect()->route('discountcode.list');
    }
    public function apply_discount(Request $request){
        $code = $request->input('code');
        $discount_code = DiscountCode::where('code', $code)->first();
        $discount_amount = 0;
        if($discount_code){
            $discount_amount = $discount_code->discount_amount;
            // dd($discount_amount);
            session()->put('discount_amount', $discount_amount);
            session()->put('success', 'Áp mã giảm giá thành công');
        }else{
            session()->put('info', 'Mã giảm giá không tồn tại');
        }
        return redirect()->back();
    }
}