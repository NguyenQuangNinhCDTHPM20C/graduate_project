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
//This is Routes for Public
Route::group(['domain' => env('APP_URL')], function () {
    Route::get('/', function () {
        return view('Public.pages.index');
    })->name('home');
    Route::get('/products', function () {
        return view('Public.pages.products');
    })->name('products');
    Route::get('/product-detail', function () {
        return view('Public.pages.product-detail');
    })->name('product-detail');
    Route::get('/contact', function () {
        return view('Public.pages.contact');
    })->name('contact');
    Route::get('/cart', function () {
        return view('Public.pages.cart');
    })->name('cart');
    Route::get('/checkout', function () {
        return view('Public.pages.checkout');
    })->name('checkout');
    Route::get('/login', function () {
        return view('Public.pages.login');
    })->name('login');
    Route::get('/logup', function () {
        return view('Public.pages.logup');
    })->name('logup');
});
//This is Routes for Admin
Route::group(['domain' => env('APP_ADMIN_URL')], function () {
    Route::get('/', function () {
        return view('Admin.pages.index');
    })->name('index');
    Route::get('/chat', function () {
        return view('Admin.pages.chat');
    })->name('chat');
    Route::get('/email', function () {
        return view('Admin.pages.email');
    })->name('email');
    Route::get('/product-list', function () {
        return view('Admin.pages.products');
    })->name('product-list');
    Route::get('/add-product', function () {
        return view('Admin.pages.add-product');
    })->name('add-product');
    Route::get('/category-list', function () {
        return view('Admin.pages.categorys');
    })->name('category-list');
    Route::get('/subcategory-list', function () {
        return view('Admin.pages.subcategory');
    })->name('subcategory-list');
    Route::get('sales-list', function () {
        return view('Admin.pages.sales');
    })->name('sales-list');
    Route::get('/invoice-report', function () {
        return view('Admin.pages.invoices');
    })->name('invoice-report');
    Route::get('/customer-list', function () {
        return view('Admin.pages.customers');
    })->name('customer-list');
    Route::get('/supplier-list', function () {
        return view('Admin.pages.suppliers');
    })->name('supplier-list');
    Route::get('/user-list', function () {
        return view('Admin.pages.users');
    })->name('user-list');
     Route::get('/sales-report', function () {
        return view('Admin.pages.sales-report');
    })->name('sales-report');
     Route::get('/invoice-report', function () {
        return view('Admin.pages.invoice-report');
    })->name('invoice-report');
    Route::get('/signin', function () {
        return view('Admin.pages.login');
    })->name('signin');
});