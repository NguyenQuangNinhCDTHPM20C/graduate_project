<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
use Carbon\Carbon;
use Endroid\QrCode\QrCode;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    // Show home
    public function index(){
        $products = Product::paginate(10);
        $newProducts = Product::where('created_at', '>=', Carbon::now()->subDays(7))->get();
        $brands = Brand::all();
        $category = \DB::table('category')->where('type', 'product')
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
    public function product_detail($slug){
        $product = Product::where('slug', $slug)->first();

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
            ->where('product_id', $product->id)
            ->first();
        }
        $reviews = DB::table('reviews')
        ->join('accounts', 'reviews.account_id', '=', 'accounts.id')
        ->where('reviews.product_id', $product->id)
        ->select('reviews.*', 'accounts.photo as account_photo', 'accounts.name as account_name')
        ->get();

        $review_count = $reviews->count();
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
        $comments =  DB::table('reviews')
        ->join('products', 'reviews.product_id', '=', 'products.id')
        ->where('reviews.account_id', $account_id)
        ->select('reviews.*', 'products.slug as product_slug')
        ->get();
    
        foreach ($comments as $comment) {
            $comment->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y');
        }
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
        
        $reviews = DB::table('reviews')
        ->join('products', 'reviews.product_id', '=', 'products.id')
        ->where('reviews.account_id', $account_id)
        ->select('reviews.*', 'products.slug as product_slug')
        ->get();
    
        foreach ($reviews as $review) {
            $review->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $review->created_at)->format('d/m/Y');
        }
    

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

    public function blogs()
    {
        $blogs = DB::table('blogs')
        ->join('sub_category', 'blogs.sub_category_id', '=', 'sub_category.id')
        ->leftjoin('views', 'blogs.id', '=', 'views.viewable_id')
        ->select('blogs.*', 'sub_category.name as sub_category_name', DB::raw('COUNT(views.viewable_id) as view_count'))
        ->groupBy('blogs.id', 'blogs.category_id', 'blogs.sub_category_id', 'blogs.author', 'blogs.title', 'blogs.slug', 'blogs.image', 'blogs.content', 'blogs.created_at', 'blogs.updated_at', 'sub_category.name')
        ->paginate(10);

        foreach ($blogs as $blog) {
            $blog->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d F, Y');
        }

        $hot_blogs = DB::table('blogs')
        ->join('views', 'views.viewable_id', '=', 'blogs.id')
        ->select('blogs.*', DB::raw('COUNT(views.viewable_id) as view_count'))
        ->groupBy('blogs.id', 'blogs.category_id', 'blogs.sub_category_id', 'blogs.author', 'blogs.title', 'blogs.slug', 'blogs.image', 'blogs.content', 'blogs.created_at', 'blogs.updated_at')
        ->orderBy('view_count', 'desc')
        ->take(5)
        ->get();    

        foreach ($hot_blogs as $hot_blog) {
            $hot_blog->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $hot_blog->created_at)->format('d F, Y');
        }

        $random_blog = Blog::inRandomOrder()->take(3)->get();

        $viewed_blogs_id = session('viewed_blogs', []);
        $viewed_blogs = Blog::whereIn('id', $viewed_blogs_id)->get();
      
        return view('public.pages.blog.blog-list', compact('blogs', 'random_blog', 'hot_blogs', 'viewed_blogs'));
    }

    

    public function blog_detail($slug){
        $blog = Blog::where('slug', $slug)->first();
        
        views($blog)->record();
        $count_view = views($blog)->count();
        session()->push('viewed_blogs', $blog->id);
        $viewed_blogs_id = session('viewed_blogs', []);
        $viewed_blogs = Blog::whereIn('id', $viewed_blogs_id)->get();
        
        $hot_blogs = DB::table('blogs')
        ->join('views', 'views.viewable_id', '=', 'blogs.id')
        ->select('blogs.*', DB::raw('COUNT(views.viewable_id) as view_count'))
        ->groupBy('blogs.id', 'blogs.category_id', 'blogs.sub_category_id', 'blogs.author', 'blogs.title', 'blogs.slug', 'blogs.image', 'blogs.content', 'blogs.created_at', 'blogs.updated_at')
        ->orderBy('view_count', 'desc')
        ->take(5)
        ->get();    

        foreach ($hot_blogs as $hot_blog) {
            $hot_blog->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $hot_blog->created_at)->format('d F, Y');
        }
        $new_blog = Blog::orderBy('created_at', 'desc')->first();
        
        $previous_blog = Blog::where('id', '<', $blog->id)
          ->orderBy('id', 'desc')
          ->first();

        $next_blog = Blog::where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first();
        return view('Public.pages.blog.blog-detail', compact('blog', 'new_blog', 'count_view', 'hot_blogs', 'viewed_blogs', 'previous_blog', 'next_blog'));
    }
}