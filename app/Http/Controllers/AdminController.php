<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Brand;
use App\Models\Invoice;
use App\Models\Product;

class AdminController extends Controller
{
    public function dash_board(){
        $count_customer = Account::where('role', 2)->count();
        $count_brand = Brand::count();
        $count_sale_invoice = Invoice::count();
        $product_out_stock = Product::where('quantity', '<' , '5')->get();
        $recent_added_product = Product::latest()->take(4)->get();
        return view('admin.pages.dashboard.index', compact('count_customer', 'count_brand', 'count_sale_invoice', 'product_out_stock', 'recent_added_product'));
    }
}