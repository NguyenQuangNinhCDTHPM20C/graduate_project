<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', function () {
            return view('Public.pages.account.index');
        })->name('account.index');
        Route::get('/account-infor', function () {
            return view('Public.pages.account.infor');
        })->name('account.infor');
        Route::get('/order', function () {
            return view('Public.pages.account.order');
        })->name('account.order');
        Route::get('/wishlist', function () {
            return view('Public.pages.account.wishlist');
        })->name('account.wishlist');
        Route::get('/comment', function () {
            return view('Public.pages.account.comment');
        })->name('account.comment');
        Route::get('/review', function () {
            return view('Public.pages.account.review');
        })->name('account.review');
    });
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
    //Routes for product
    Route::get('/product-list', [ProductController::class, 'index'])->name('product.list');
    Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/add-product', [ProductController::class, 'create'])->name('product.add');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    //Routes for category
    Route::get('/category-list', [CategoryController::class, 'index'])->name('category.list');
    Route::post('/add-category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/add-category', [CategoryController::class, 'create'])->name('category.add');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/brand-list', function () {
        return view('Admin.pages.brands');
    })->name('brand.list');
    Route::get('/subcategory-list', function () {
        return view('Admin.pages.subcategory');
    })->name('subcategory.list');
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
    Route::get('/profile', function () {
        return view('Admin.pages.profile');
    })->name('profile');
    Route::get('/setting', function () {
        return view('Admin.pages.setting');
    })->name('setting');
});