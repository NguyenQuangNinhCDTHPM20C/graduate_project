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

// Route::get('/', function () {
//     return view('welcome');
// });
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