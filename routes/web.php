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
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Api\FacebookController;
use App\Http\Controllers\Api\ZaloController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PurchaseInvoiceController;
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
    //Routes for product
    Route::get('/products', [UserController::class, 'products'])->name('products');
    Route::get('/product/{slug}', [UserController::class, 'product_detail'])->name('product-detail');
    Route::get('/products/{type}', [UserController::class, 'products_type'])->name('product-type');
    Route::get('/search', [UserController::class, 'search'])->name('search');
    //Routes for shopping cart
    Route::get('cart', [CartController::class, 'index'])->name('cart.list');
    Route::post('cart', [CartController::class, 'add'])->name('cart.add');
    Route::post('cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clear'])->name('cart.clear');
    //Route for contact
    Route::get('/contact', [UserController::class, 'contact'])->name('contact');
    //Route for add product to favorite
    Route::post('/favorite/add', [FavoriteController::class, 'create'])->name('favorite.add')->middleware('auth.public');
    Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy_2'])->name('favorite.delete')->middleware('auth.public');
    //Route for add review product
    Route::post('/review/add', [ReviewController::class, 'store'])->name('review.add');
    Route::get('/checkout',[UserController::class, 'checkout'])->name('checkout');
    Route::get('/invoice/{code}',[UserController::class, 'invoice'])->name('invoice');
    //Routes for authenticate
    Route::get('/login', [AuthController::class, 'showLoginFormPublic'])->name('public.login')->middleware('guest.public');
    Route::post('/login', [AuthController::class, 'login_public'])->middleware('guest.public');
    Route::post('/logout', [AuthController::class, 'logout_public'])->name('public.logout');
    Route::get('/logup', [AuthController::class, 'showRegisterForm'])->name('logup')->middleware('guest.public');
    Route::post('/logup', [AuthController::class, 'register'])->name('logup.submit')->middleware('guest.public');
    Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify-email');
    Route::get('/reset-password', [AuthController::class, 'showResetPassForm'])->name('reset-pass.form')->middleware('guest.public');
    Route::post('/reset-password', [AuthController::class, 'resetPass'])->name('reset-pass.submit')->middleware('guest.public');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetPass'])->name('reset-pass');
    //Routes for login google
    Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google'); 
    Route::get('/callback/google', [GoogleController::class, 'handleGoogleCallback']);
    Route::get('/login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('/callback/facebook', [FacebookController::class, 'handleFacebookCallback']);
    Route::get('/login/zalo', [ZaloController::class, 'redirectToZalo'])->name('login.zalo');
    Route::get('/callback/zalo', [ZaloController::class, 'handleZaloCallback']);
    //Routes for payment
    Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');
    Route::get('/payment/status', [PaymentController::class, 'getPaymentStatus'])->name('payment.status');
    Route::get('/payment', [UserController::class, 'payment'])->name('payment');
    //Routes for blog
    Route::get('/blogs',[UserController::class, 'blogs'])->name('blogs');
    Route::get('/blog-detail/{slug}',[UserController::class, 'blog_detail'])->name('blog-detail');
    Route::get('/check-qr/{qr_token}', [AuthController::class, 'check_qr'])->name('check-qr');
    //Routes for account
    Route::group(['prefix' => 'account', 'middleware' => 'auth.public'], function () {
        Route::get('/', [UserController::class, 'dash_board'])->name('account.index');
        Route::get('/infor', [UserController::class, 'account_infor'])->name('account.infor');
        Route::post('/infor/update', [AccountController::class, 'update'])->name('account.update');
        Route::get('/order',[UserController::class, 'orders'])->name('account.order');
        Route::get('/favorite', [FavoriteController::class, 'index'])->name('account.favorite');
        Route::delete('/favorite/{id}', [FavoriteController::class, 'destroy'])->name('account.favorite.delete');
        Route::get('/comment', [UserController::class, 'comments'])->name('account.comment');
        Route::get('/review', [UserController::class, 'reviews'])->name('account.review');
    });
});
//This is Routes for Admin
Route::group(['domain' => env('APP_ADMIN_URL')], function () {
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/', [AdminController::class, 'dash_board'])->name('index');
        Route::get('/chat', function () {
            return view('admin.pages.chat.chat');
        })->name('chat')->middleware('auth.admin');
        Route::get('/email', function () {
            return view('admin.pages.email.email');
        })->name('email');
        //Routes for product
        Route::get('/product/list', [ProductController::class, 'index'])->name('product.list');
        Route::post('/product/add', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/add', [ProductController::class, 'create'])->name('product.add');
        Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.detail');
        Route::get('/product/edit/{slug}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
        //Routes for category
        Route::get('/category/list', [CategoryController::class, 'index'])->name('category.list');
        Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/add', [CategoryController::class, 'create'])->name('category.add');
        Route::get('/category/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
        //Routes for brand
        Route::get('/brand/list',[BrandController::class, 'index'])->name('brand.list');
        Route::post('/brand/add', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/brand/add', [BrandController::class, 'create'])->name('brand.add');
        Route::get('/brand/edit/{slug}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.delete');
        //Routes for sub category
        Route::get('/sub-category/list', [SubCategoryController::class, 'index'])->name('subcategory.list');
        Route::post('/sub-category/add', [SubCategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/sub-category/add', [SubCategoryController::class, 'create'])->name('subcategory.add');
        Route::get('/sub-category/edit/{slug}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
        Route::put('/sub-category/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('/sub-category/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.delete');
        Route::get('/sales/list', function () {
            return view('admin.pages.sale.sale-list');
        })->name('sales.list');
        //Routes for invoice
        Route::get('/invoice/list',[InvoiceController::class, 'index'])->name('invoice.list');
        Route::get('/invoice/edit/{code}', [InvoiceController::class, 'edit'])->name('invoice.edit');
        Route::put('/invoice/{id}', [InvoiceController::class, 'update'])->name('invoice.update');
        Route::delete('/invoice/delete/{id}', [InvoiceController::class, 'destroy'])->name('invoice.delete');
        //Routes for auth
        Route::post('/logout', [AuthController::class, 'logout_admin'])->name('admin.logout');
        Route::get('/invoice/report', function () {
            return view('admin.pages.invoice.invoice-list');
        })->name('invoice.report');
        Route::get('/customer/list', [AdminController::class, 'customers'])->name('customer.list');
        Route::get('/supplier/list', function () {
            return view('admin.pages.supplier.supplier-list');
        })->name('supplier.list');
        Route::get('/user/list',[AdminController::class, 'users'])->name('user.list');
         Route::get('/sales/report', function () {
            return view('admin.pages.sale.sales-report');
        })->name('sales.report');
        Route::get('/profile', function () {
            return view('admin.pages.profile.profile');
        })->name('profile');
        Route::post('/profile', [AccountController::class, 'update'])->name('profile.update');
        Route::get('/setting', function () {
            return view('admin.pages.setting.setting');
        })->name('setting');
        Route::post('/setting', [AdminController::class, 'update_setting'])->name('setting.update');
        //Routes for blogs
        Route::get('/blog/list', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/add', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/add', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/edit/{slug}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
        Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
        //Routes for purchase_invoice
        Route::get('/purchase-invoice/list',[PurchaseInvoiceController::class, 'index'])->name('purchase-invoice.list');
        Route::post('/purchase-invoice/add', [PurchaseInvoiceController::class, 'store'])->name('purchase-invoice.store');
        Route::post('/purchase-invoice/add/detail', [PurchaseInvoiceController::class, 'store_detail'])->name('purchase-invoice.store_detail');
        Route::get('/purchase-invoice/add/detail', [PurchaseInvoiceController::class, 'store_detail'])->name('purchase-invoice.add_detail');
        Route::get('/purchase-invoice/add', [PurchaseInvoiceController::class, 'create'])->name('purchase-invoice.add');
        Route::get('/purchase-invoice/edit/{code}', [PurchaseInvoiceController::class, 'edit'])->name('purchase-invoice.edit');
        Route::put('/purchase-invoice/{id}', [PurchaseInvoiceController::class, 'update'])->name('purchase-invoice.update');
        Route::delete('/purchase-invoice/{id}', [PurchaseInvoiceController::class, 'destroy'])->name('purchase-invoice.delete');
    });
    Route::get('/login', [AuthController::class, 'showLoginFormAdmin'])->name('admin.login')->middleware('guest.admin');
    Route::post('/login', [AuthController::class, 'login_admin'])->middleware('guest.admin');
    Route::get('/logup', [AuthController::class, 'showRegisterFormAdmin'])->name('admin.logup')->middleware('guest.admin');
    Route::post('/logup', [AuthController::class, 'register_admin'])->name('admin.logup.submit');
    Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmailAdmin'])->name('admin.verify-email');
});