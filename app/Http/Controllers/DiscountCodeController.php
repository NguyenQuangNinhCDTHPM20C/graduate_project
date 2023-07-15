<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCode;
class DiscountCodeController extends Controller
{
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