<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Endroid\QrCode\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Favorite;
use App\Models\FavoriteDetail;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Review;
use App\Models\Account;
use App\Models\Blog;
use App\Models\Image;
use App\Models\ProductColor;
use App\Models\Laptop;
use App\Http\Controllers\FilterController;

class UserController extends Controller
{
    // Show home
    public function index(){
        $products = Product::with('reviews')->paginate(10);
        $new_products = Product::where('created_at', '>=', Carbon::now()->subDays(7))->with('reviews')->get();
        $brands = Brand::all();
        $category_accessory = Category::where('type', 'accessory')->first();
        $accsessories = SubCategory::where('category_id', $category_accessory->id)->get();
         return view('public.pages.home.index', [
            'products' => $products,
            'accsessories' => $accsessories,
            'brands' => $brands,
            'new_products' => $new_products
        ]);
    }
    
    // Get list product
    public function products(Request $request)
    {
        $categories = Category::where('type', '!=', 'blog')->get();
        $blog_category = Category::where('type', 'blog')->first();
        $sub_categories = SubCategory::where('category_id','!=', $blog_category->id)->distinct('name')->pluck('name');
        $laptop_properties = Laptop::get();
        $cpu_brands = Laptop::distinct('cpu_brand')->pluck('cpu_brand');
        $cpu_series = Laptop::distinct('cpu_series')->pluck('cpu_series');
        $cpu_models = Laptop::distinct('cpu_model')->pluck('cpu_model');
        $display_resolutions = Laptop::distinct('display_resolution')->pluck('display_resolution');
        $display_sizes = Laptop::distinct('display_size')->pluck('display_size');
        $ram_sizes = Laptop::distinct('ram_size')->pluck('ram_size');
        $storage_capacitys = Laptop::distinct('storage_capacity')->pluck('storage_capacity');
        $dedicated_graphics = Laptop::distinct('dedicated_graphics')->pluck('dedicated_graphics');
        $products_query = Product::query();

        $filterController = new FilterController();
        $products_query = $filterController->filterProducts($request);

        $products = $products_query->paginate(12);
        $brands = Brand::distinct('name')->pluck('name');

        $productReviewsCount = [];
        foreach ($products as $product) {
            $product->loadCount('reviews');
            $productReviewsCount[$product->id] = $product->reviews_count;
        }
        
        return view('public.pages.product.product-list', 
        compact('products', 'categories', 'sub_categories', 'laptop_properties',
         'brands', 'cpu_brands', 'cpu_series', 'cpu_models', 'display_resolutions', 
         'display_sizes', 'ram_sizes', 'storage_capacitys', 'dedicated_graphics', 'productReviewsCount'));
    }

    // Show product detail 
    public function product_detail($slug){
        $product = Product::where('slug', $slug)->first();
        $images = Image::where('entity_id', $product->id)->get();
        $product_colors = ProductColor::where('product_id', $product->id)->get();
        $product_info = '';
        if($product->category->type == 'laptop'){
            $product_info = Laptop::where('product_id', $product->id)->first();
        }
        if (!$product) {
            abort(404);
        }
        $existingFavoriteDetail = '';
        if(session::has('account')){
        $favorite = Favorite::firstOrCreate(['account_id' => session('account')->id]);
        $favoriteId = $favorite->id;
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
        $average_rating = 5.00;
        if($review_count > 0){
        $total_rating = 0;
        foreach($reviews as $review){
            $total_rating += $review->rating;
        }
        $average_rating = $total_rating / $review_count;}
        return view('public.pages.product.product-detail', compact('product', 'images', 'product_colors', 'reviews', 'review_count', 'existingFavoriteDetail', 'product_info', 'average_rating'));
    }

    public function products_type(Request $request, $type)
    {
        $category = Category::where('type',$type) ->first();
        $products = Product::where('category_id', $category->id)->with('reviews')->paginate(12);
        $categories = Category::where('type', '!=', 'blog')->get();
        $blog_category = Category::where('type', 'blog')->first();
        $sub_categories = SubCategory::where('category_id','!=', $blog_category->id)->distinct('name')->pluck('name');
        $laptop_properties = Laptop::get();
        $cpu_brands = Laptop::distinct('cpu_brand')->pluck('cpu_brand');
        $cpu_series = Laptop::distinct('cpu_series')->pluck('cpu_series');
        $cpu_models = Laptop::distinct('cpu_model')->pluck('cpu_model');
        $display_resolutions = Laptop::distinct('display_resolution')->pluck('display_resolution');
        $display_sizes = Laptop::distinct('display_size')->pluck('display_size');
        $ram_sizes = Laptop::distinct('ram_size')->pluck('ram_size');
        $storage_capacitys = Laptop::distinct('storage_capacity')->pluck('storage_capacity');
        $dedicated_graphics = Laptop::distinct('dedicated_graphics')->pluck('dedicated_graphics');
        $products_query = Product::query();
        if($request){
        $filterController = new FilterController();
        $products_query = $filterController->filterProducts($request);
        }
        // $products = $products_query->paginate(12);
        $brands = Brand::distinct('name')->pluck('name');
        return view('public.pages.product.product-type', compact('products', 'category', 'categories', 'sub_categories', 'laptop_properties',
        'brands', 'cpu_brands', 'cpu_series', 'cpu_models', 'display_resolutions', 
        'display_sizes', 'ram_sizes', 'storage_capacitys', 'dedicated_graphics'));
    }

    public function products_type_1(Request $request, $slug)
    {
        $sub = SubCategory::where('slug', $slug)->first();
        // $category = Category::where('type',$type) ->first();
        $products = Product::where('sub_category_id', $sub->id)->with('reviews')->paginate(12);
        $categories = Category::where('type', '!=', 'blog')->get();
        $blog_category = Category::where('type', 'blog')->first();
        $sub_categories = SubCategory::where('category_id','!=', $blog_category->id)->distinct('name')->pluck('name');
        $laptop_properties = Laptop::get();
        $cpu_brands = Laptop::distinct('cpu_brand')->pluck('cpu_brand');
        $cpu_series = Laptop::distinct('cpu_series')->pluck('cpu_series');
        $cpu_models = Laptop::distinct('cpu_model')->pluck('cpu_model');
        $display_resolutions = Laptop::distinct('display_resolution')->pluck('display_resolution');
        $display_sizes = Laptop::distinct('display_size')->pluck('display_size');
        $ram_sizes = Laptop::distinct('ram_size')->pluck('ram_size');
        $storage_capacitys = Laptop::distinct('storage_capacity')->pluck('storage_capacity');
        $dedicated_graphics = Laptop::distinct('dedicated_graphics')->pluck('dedicated_graphics');
        $products_query = Product::query();
        if($request){
        $filterController = new FilterController();
        $products_query = $filterController->filterProducts($request);
        }
        $brands = Brand::distinct('name')->pluck('name');
        return view('public.pages.product.product-type-1', compact('products', 'sub', 'categories', 'sub_categories', 'laptop_properties',
        'brands', 'cpu_brands', 'cpu_series', 'cpu_models', 'display_resolutions', 
        'display_sizes', 'ram_sizes', 'storage_capacitys', 'dedicated_graphics'));
    }

    // Search product
    public function search(Request $request)
    {
        $slug = $request->input('slug');
        $products = Product::where('slug', 'LIKE', '%' . $slug . '%')->with('reviews')->get();
        $categories = Category::where('type', '!=', 'blog')->get();
        $blog_category = Category::where('type', 'blog')->first();
        $sub_categories = SubCategory::where('category_id','!=', $blog_category->id)->distinct('name')->pluck('name');
        $laptop_properties = Laptop::get();
        $cpu_brands = Laptop::distinct('cpu_brand')->pluck('cpu_brand');
        $cpu_series = Laptop::distinct('cpu_series')->pluck('cpu_series');
        $cpu_models = Laptop::distinct('cpu_model')->pluck('cpu_model');
        $display_resolutions = Laptop::distinct('display_resolution')->pluck('display_resolution');
        $display_sizes = Laptop::distinct('display_size')->pluck('display_size');
        $ram_sizes = Laptop::distinct('ram_size')->pluck('ram_size');
        $storage_capacitys = Laptop::distinct('storage_capacity')->pluck('storage_capacity');
        $dedicated_graphics = Laptop::distinct('dedicated_graphics')->pluck('dedicated_graphics');
        $products_query = Product::query();

        $filterController = new FilterController();
        $products_query = $filterController->filterProducts($request);

        // $products = $products_query->paginate(12);
        $brands = Brand::distinct('name')->pluck('name');
        return view('public.pages.product.product-search', compact('products', 'categories', 'sub_categories', 'laptop_properties',
        'brands', 'cpu_brands', 'cpu_series', 'cpu_models', 'display_resolutions', 
        'display_sizes', 'ram_sizes', 'storage_capacitys', 'dedicated_graphics'));
    }

    // Get list order for user
    public function orders(){
        $account_id = session('account')->id;
        $orders = Invoice::where('account_id', '=', $account_id)->orderBy('created_at', 'desc')->get();
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
        $invoice = Invoice::where('account_id', $account_id)->get();
        $orders = InvoiceDetail::whereIn('invoice_id', $invoice->pluck('id'))->orderBy('created_at', 'desc')->get();

        $favorites = FavoriteDetail::join('favorites', 'favorite_details.favorite_id', '=', 'favorites.id')
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
    
    public function reviews(){
        $account_id = session('account')->id;
        $reviews = DB::table('reviews')
        ->join('products', 'reviews.product_id', '=', 'products.id')
        ->where('reviews.account_id', $account_id)
        ->select('reviews.*', 'products.slug as product_slug')
        ->get();
    
        foreach ($reviews as $review) {
            $review->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $review->created_at)->format('d/m/Y');
        }
        return view('public.pages.account.review', compact('reviews'));
    }

    public function checkout(){
        $cartItems = \Cart::getContent();
        return view('public.pages.checkout.index', compact('cartItems'));
    }

    public function payment(){
        return view('Public.pages.payment.payment');
    }

    public function invoice($code){
        $invoice = Invoice::where('code', $code)->first();
        $order_items = InvoiceDetail::where('invoice_id', $invoice->id)->get();
        return view('Public.pages.payment.invoice', compact('invoice', 'order_items'));
    }

    public function blogs()
    {
        $blogs = DB::table('blogs')
        ->join('sub_categories', 'blogs.sub_category_id', '=', 'sub_categories.id')
        ->leftjoin('views', 'blogs.id', '=', 'views.viewable_id')
        ->select('blogs.*', 'sub_categories.name as sub_category_name', DB::raw('COUNT(views.viewable_id) as view_count'))
        ->groupBy('blogs.id', 'blogs.category_id', 'blogs.sub_category_id', 'blogs.author', 'blogs.title', 'blogs.slug', 'blogs.image', 'blogs.content', 'blogs.created_at', 'blogs.updated_at', 'sub_categories.name')
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
        $random_blog = Blog::inRandomOrder()->take(2)->get();

        return view('Public.pages.blog.blog-detail', compact('blog', 'new_blog', 'count_view', 'hot_blogs', 'viewed_blogs', 'previous_blog', 'next_blog', 'random_blog'));
    }

    public function contact(){
        return view('public.pages.contact.index');
    }

    public function cancel_order(Request $request)
    {
        $id = $request->input('invoice_id');
        $invoice = Invoice::findOrFail($id);
        $invoice->status = $request->input('status');
        $invoice->save();
        $invoice_details = InvoiceDetail::where('invoice_id', $invoice->id)->get();
        foreach($invoice_details as $invoice_detail){
            $product = Product::find($invoice_detail->product_id);
            $product->quantity += $invoice_detail->quantity;
            $product->save();
        }
        session()->put('success', 'Hủy đơn hàng thành công');
        return redirect()->back();
    }
}