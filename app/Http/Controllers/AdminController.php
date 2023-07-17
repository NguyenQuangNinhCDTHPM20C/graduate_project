<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Account;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\ImportInvoice;
use App\Models\ImportInvoiceDetail;
class AdminController extends Controller
{
    public function dash_board(){
        $count_user = Account::where('role', 2)->count();
        $count_customer = Invoice::where('account_id', null)->count();
        $total_customer = $count_user + $count_customer;
        $count_sale_invoice = Invoice::count();
        $count_sale_invoice = ImportInvoice::count();
        $product_out_stock = Product::where('quantity', '<' , 10)->get();
        $total_import_invoice = ImportInvoice::where('status', 1)->sum('total');
        $total_invoice = Invoice::where('status', 3)->sum('total');
        $firstDayOfMonth = Carbon::now()->startOfMonth();
        $lastDayOfMonth = Carbon::now()->endOfMonth();
        $total_purchase_month = ImportInvoice::whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])->where('status', 1)
        ->sum('total');
        $total_sale_month = Invoice::whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])->where('status', 3)
        ->sum('total');

        $currentTime = Carbon::now();
        $previousTime = $currentTime->copy()->subDay();
        $new_invoices = InvoiceDetail::whereBetween('created_at', [$previousTime, $currentTime])->get();
        
        return view('admin.pages.dashboard.index', 
        compact('count_user', 'total_customer', 'count_sale_invoice',
        'product_out_stock','total_import_invoice', 'count_sale_invoice',
        'total_invoice', 'total_purchase_month', 'total_sale_month', 'new_invoices'));
    }

    public function users(){
        $users = Account::where('role', 2)->get();
        return view('admin.pages.user.user-list', compact('users'));
    }

    public function customers(){
        $users = Account::where('role', 2)->get();
        $customers = Invoice::where('account_id', null)->get();
        return view('admin.pages.customer.customer-list', compact('users', 'customers'));
    }

    public function update_setting(Request $request){
        $setting = Setting::where('id',$request->input('id'))->first();
        if($setting){
            $setting->phone_number = $request->input('phone_number');
            $setting->email = $request->input('email');
            $setting->address = $request->input('address');
            $setting->link_google_map = $request->input('google_map');
            $setting->link_facebook = $request->input('facebook');
            $setting->link_twitter = $request->input('twitter');
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $file_name = Str::slug('doublenshop') . '-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/'), $file_name);
            
                if ($setting->logo && File::exists(public_path($setting->logo))) {
                    File::delete(public_path($setting->logo));
                }
            
                $setting->logo = 'images/'.$file_name;
            }
            if ($request->hasFile('favicon')) {
                $file1 = $request->file('favicon');
                $file_name1 = Str::slug('doublenshop1') . '-' . time() . '.' . $file1->getClientOriginalExtension();
                $file1->move(public_path('images/'), $file_name1);
            
                if ($setting->favicon && File::exists(public_path($setting->favicon))) {
                    File::delete(public_path($setting->favicon));
                }
            
                $setting->favicon = 'images/'.$file_name1;
            }
            $setting->save();
        }
        return redirect()->route('setting');
    }
}