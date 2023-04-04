<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//This is Routes for FrontEnd
Route::group(['domain' => env('APP_URL')], function () {
    Route::get('/', function () {
        return view('frontend.pages.index');
    })->name('index');
    Route::get('/product', function () {
        return view('frontend.pages.product');
    })->name('product');
    Route::get('/about', function () {
        return view('frontend.pages.about');
    })->name('about');
    Route::get('/product-detail', function () {
        return view('frontend.pages.product-detail');
    })->name('product-detail');
    Route::get('/contact', function () {
        return view('frontend.pages.contact');
    })->name('contact');
    Route::get('/cart', function () {
        return view('frontend.pages.cart');
    })->name('cart');
});
//This is Routes for BackEnd
Route::group(['domain' => env('APP_ADMIN_URL')], function () {
    Route::get('/', function () {
        return view('backend.pages.index');
    })->name('index');
    Route::get('/chat', function () {
        return view('backend.pages.chat');
    })->name('chat');
    Route::get('/email', function () {
        return view('backend.pages.email');
    })->name('email');
    Route::get('/product-list', function () {
        return view('backend.pages.products');
    })->name('product-list');
    Route::get('/add-product', function () {
        return view('backend.pages.add-product');
    })->name('add-product');
    Route::get('/category-list', function () {
        return view('backend.pages.categorys');
    })->name('category-list');
    Route::get('/subcategory-list', function () {
        return view('backend.pages.subcategory');
    })->name('subcategory-list');
    Route::get('sales-list', function () {
        return view('backend.pages.sales');
    })->name('sales-list');
    Route::get('/invoice-report', function () {
        return view('backend.pages.invoices');
    })->name('invoice-report');
    Route::get('/customer-list', function () {
        return view('backend.pages.customers');
    })->name('customer-list');
    Route::get('/supplier-list', function () {
        return view('backend.pages.suppliers');
    })->name('supplier-list');
    Route::get('/user-list', function () {
        return view('backend.pages.users');
    })->name('user-list');
     Route::get('/sales-report', function () {
        return view('backend.pages.sales-report');
    })->name('sales-report');
     Route::get('/invoice-report', function () {
        return view('backend.pages.invoice-report');
    })->name('invoice-report');
    Route::get('/signin', function () {
        return view('backend.pages.login');
    })->name('signin');
});