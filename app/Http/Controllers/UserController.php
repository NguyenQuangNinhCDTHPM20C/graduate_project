<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Favorite;
use App\Models\FavoriteDetail;
use App\Models\Invoice;
use App\Models\Review;
use App\Models\Account;
use App\Models\Blog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Endroid\QrCode\QrCode;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    // Show home
    public function index(){
        $products = Product::all();
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $brands = Brand::all();
        $category = \DB::table('category')
        ->leftJoin('products', 'category.id', '=', 'products.category_id')
        ->select('category.id', 'category.name', 'category.image', \DB::raw('count(products.id) as total'))
        ->groupBy('category.id', 'category.name', 'category.image')
        ->get();
         // Return view index with products and number of products of each type
         return view('public.pages.home.index', [
            'products' => $products,
            'category' => $category,
            'brands' => $brands,
            'new_products' => $newProducts
        ]);
    }
    
    // Get list product
    public function products(Request $request)
    {
        // Lấy danh sách tất cả các danh mục cùng số lượng sản phẩm
        $category = Category::withCount('products')->get();

        // Lấy danh sách sản phẩm
        $productsQuery = Product::query();

        // Kiểm tra xem checkbox "Filter" có được chọn hay không
        if ($request->has('filter')) {
            // Lấy danh sách các danh mục được chọn
            $selectedCategories = $request->input('categories', []);

            // Lọc sản phẩm dựa trên danh mục được chọn
            $productsQuery->whereIn('category_id', $selectedCategories);
        }

        // Lấy kết quả sản phẩm đã lọc hoặc toàn bộ sản phẩm
        $products = $productsQuery->paginate(10);

        return view('public.pages.product.product-list', compact('products', 'category'));
    }

    // Show product detail 
    public function product_detail($id){
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        $existingFavoriteDetail = '';
        if(session::has('account')){
        $favorite = Favorite::firstOrCreate(['account_id' => session('account')->id]);
        // Get ID favorite
        $favoriteId = $favorite->id;
        // Check exits product in favorite_detail
        $existingFavoriteDetail = FavoriteDetail::where('favorite_id', $favoriteId)
            ->where('product_id', $id)
            ->first();
        }
        $reviews = Review::where('product_id', $id)->get();
        $review_count = Review::where('product_id', $id)->count();
        return view('public.pages.product.product-detail', compact('product', 'reviews', 'review_count', 'existingFavoriteDetail'));
    }

    // Search product
    public function search(Request $request)
    {
        $slug = $request->input('slug');
        // Search product follow slug
        $products = Product::where('slug', 'LIKE', '%' . $slug . '%')->get();
        // Result
        return view('public.pages.product.product-search', compact('products'));
    }

    // Get list order for user
    public function orders(){
        $account_id = session('account')->id;
        $orders = Invoice::where('account_id', '=', $account_id)->get();
        foreach ($orders as $order) {
            $order->order_date = Carbon::parse($order->order_date)->format('d/m/Y');
        }
    return view('public.pages.account.order', compact('orders'));

    }

    // Get list comment for user
    public function comments(){
        $account_id = session('account')->id;
        $comments = Review::where('account_id', '=', $account_id)->get();
        return view('public.pages.account.comment', compact('comments'));

    }

    //Get info account
    public function dash_board(){
        $account_id = session('account')->id;
        $orders = DB::table('invoices')
        ->join('invoice_detail', 'invoices.id', '=', 'invoice_detail.invoice_id')
        ->join('products', 'invoice_detail.product_id', '=', 'products.id')
        ->select('invoices.*', 'invoice_detail.quantity', 'invoice_detail.price', 'products.name as product_name')
        ->where('invoices.account_id', '=', $account_id)
        ->get();

        foreach ($orders as $order) {
            $order->order_date = Carbon::parse($order->order_date)->format('d/m/Y');
        }
        $favorites = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', $account_id)
        ->get();
        $reviews = Review::where('account_id', '=', $account_id)->get();
        
        return view('public.pages.account.index', compact('orders', 'favorites', 'reviews'));

    }
    
    public function account_infor()
    {
        return view('Public.pages.account.infor');
    }   

    public function checkout(){
        $cartItems = \Cart::getContent();
        return view('public.pages.checkout.checkout', compact('cartItems'));
    }

    public function payment(){
        return view('Public.pages.payment.payment');
    }

    public function blogs(){
        $blogs = Blog::paginate(10);
        return view('Public.pages.blog.blog-list', compact('blogs'));
    }

    public function blog_detail($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view('Public.pages.blog.blog-detail', compact('blog'));
    }
}