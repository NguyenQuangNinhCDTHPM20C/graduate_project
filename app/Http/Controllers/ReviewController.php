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
        $productId = $request->input('product_id');
        $comment = $request->input('comment');
        $rating = $request->input('rating');

        // Check login or not 
        if (Session::has('account')) {
            $userId = Session('account')->id;
            
            // Check user bought or not
            $invoice = Invoice::join('invoice_detail', 'invoices.id', '=', 'invoice_detail.invoice_id')
                ->where('invoices.account_id', $userId)
                ->where('invoices.status', 1)
                ->where('invoice_detail.product_id', $productId)
                ->first();

            if ($invoice) {
                $review = new Review;
                $review -> account_id = $userId;
                $review -> product_id = $productId;
                $review -> comment = $comment;
                $review -> rating = $rating;
                $review -> status = 1;
                // Save review to database
                $review->save();

                return redirect()->back()->with('success', 'Đánh giá sản phẩm thành công.');
            }
        }

        return redirect()->back()->with('error', 'Không thể đánh giá sản phẩm.');
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