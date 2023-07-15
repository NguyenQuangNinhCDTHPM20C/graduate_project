<?php

namespace App\Http\Controllers;
use App\Models\Models;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $comment = $request->input('comment');
        $rating = $request->input('rating');

        if (Session::has('account')) {
            $account_id = Session('account')->id;
            $invoice = Invoice::where('account_id', $account_id)->where('status', 3)->first();

            if ($invoice) {
                $invoice_detail = InvoiceDetail::where('invoice_id', $invoice->id)->where('product_id', $product_id)->first();
                if($invoice_detail){
                    $review = new Review;
                    $review -> account_id = $account_id;
                    $review -> product_id = $product_id;
                    $review -> comment = $comment;
                    $review -> rating = $rating;
                    $review->save();
                    session()->put('success', 'Đánh giá sản phẩm thành công !');
                }else{
                    session()->put('info', 'Vui lòng mua sản phẩm !');
                }
            }else{
                session()->put('info', 'Bạn chưa thể đánh giá sản phẩm!');
            }
        }else{
            session()->put('info', 'Vui lòng đăng nhập!');
        }
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}