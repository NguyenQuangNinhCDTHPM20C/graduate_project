<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
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
    Route::get('/',[UserController::class, 'index'])->name('home');
    Route::get('/products', function () {
        return view('Public.pages.product.product-list');
    })->name('products');
    Route::get('/product/{id}', [UserController::class, 'product_detail'])->name('product-detail');
    //Routes for shopping cart
    Route::get('cart', [CartController::class, 'index'])->name('cart.list');
    Route::post('cart', [CartController::class, 'add'])->name('cart.add');
    Route::post('update-cart', [CartController::class, 'update'])->name('cart.update');
    Route::post('remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/contact', function () {
        return view('Public.pages.contact');
    })->name('contact');
    //Route for add product to favorite
    Route::post('/favorite/add', [FavoriteController::class, 'create'])->name('favorite.add')->middleware('auth.public');
    

    Route::get('/checkout', function () {
        return view('Public.pages.checkout');
    })->name('checkout');
    // Login
    Route::get('/login', [AuthController::class, 'showLoginFormPublic'])->name('public.login')->middleware('guest.public');
    Route::post('/login', [AuthController::class, 'login_public'])->middleware('guest.public');
    // Logout
    Route::post('/logout', [AuthController::class, 'logout_public'])->name('public.logout');
    //Logup
    Route::get('/logup', function () {
        return view('Public.pages.logup');
    })->name('logup');
    Route::group(['prefix' => 'account', 'middleware' => 'auth.public'], function () {
        Route::get('/', function () {
            return view('Public.pages.account.index');
        })->name('account.index');
        Route::get('/account-infor', function () {
            return view('Public.pages.account.infor');
        })->name('account.infor');
        Route::get('/order',[UserController::class, 'orders'])->name('account.order');
        Route::get('/wishlist', [FavoriteController::class, 'index'])->name('account.wishlist');
        Route::delete('/wishlist/{id}', [FavoriteController::class, 'destroy'])->name('wishlist.delete');
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
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/', function () {
            return view('Admin.pages.index');
        })->name('index');
        Route::get('/chat', function () {
            return view('Admin.pages.chat');
        })->name('chat')->middleware('auth.admin');
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
        //Routes for brand
        Route::get('/brand-list',[BrandController::class, 'index'])->name('brand.list');
        Route::post('/add-brand', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/add-brand', [BrandController::class, 'create'])->name('brand.add');
        Route::get('/brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
        //Routes for sub category
        Route::get('/subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory.list');
        Route::post('/add-subcategory', [SubCategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/add-subcategory', [SubCategoryController::class, 'create'])->name('subcategory.add');
        Route::get('/subcategory/{id}/edit', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::put('/subcategory/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
        
        Route::get('sales-list', function () {
            return view('Admin.pages.sales');
        })->name('sales-list');
        //Routes for invoice
        Route::get('/invoice-list',[InvoiceController::class, 'index'])->name('invoice.list');
        //Routes for auth
        Route::post('/logout', [AuthController::class, 'logout_admin'])->name('admin.logout');
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
            return view('Admin.pages.invoices-report');
        })->name('invoice-report');
        Route::get('/profile', function () {
            return view('Admin.pages.profile');
        })->name('profile');
        Route::get('/setting', function () {
            return view('Admin.pages.setting');
        })->name('setting');
    });
    Route::get('/login', [AuthController::class, 'showLoginFormAdmin'])->name('admin.login')->middleware('guest.admin');
    Route::post('/login', [AuthController::class, 'login_admin'])->middleware('guest.admin');
   
});