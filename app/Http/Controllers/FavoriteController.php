<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\FavoriteDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class FavoriteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountId = session('id_user');
        $favorites = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', $accountId)
        ->get();
        $count_favorites = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', $accountId)
        ->count();
        return view('public.pages.account.wishlist', compact('favorites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create(Request $request)
     {
         if (session::has('auth_check')) {
             $productId = $request->input('product_id');
             $accountId = Auth()->user()->id;
     
             // Get or create favorite of user
             $favorite = Favorite::firstOrCreate(['account_id' => $accountId]);
     
             // Get ID favorite
             $favoriteId = $favorite->id;
     
             // Kiểm tra xem sản phẩm đã tồn tại trong favorite_detail hay chưa
             $existingFavoriteDetail = FavoriteDetail::where('favorite_id', $favoriteId)
                 ->where('product_id', $productId)
                 ->first();
     
             if (!$existingFavoriteDetail) {
                 // Thêm sản phẩm vào favorite_detail
                 $favoriteDetail = new FavoriteDetail();
                 $favoriteDetail->favorite_id = $favoriteId;
                 $favoriteDetail->product_id = $productId;
                 $favoriteDetail->save();
     
                 return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào mục yêu thích.');
             } else {
                 return redirect()->back()->with('error', 'Sản phẩm đã tồn tại trong mục yêu thích.');
             }
         } else {
             // Người dùng chưa đăng nhập, thông báo yêu cầu đăng nhập và chuyển đến view login
             return redirect()->route('public.login')->with('error', 'Vui lòng đăng nhập để thêm sản phẩm vào mục yêu thích.');
         }
     }
     
     


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accountId = session('id_user');
        $countFavorites = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
            ->where('favorites.account_id', $accountId)
            ->count();
        
        $productId = FavoriteDetail::where('id', $id)
            ->where('favorite_id', function ($query) use ($accountId) {
                $query->select('id')
                    ->from('favorites')
                    ->where('account_id', $accountId);
            })
            ->value('product_id');
        
        if ($productId) {
            FavoriteDetail::where('id', $id)
                ->where('favorite_id', function ($query) use ($accountId) {
                    $query->select('id')
                        ->from('favorites')
                        ->where('account_id', $accountId);
                })
                ->delete();
            
            if ($countFavorites == 1) {
                Favorite::where('id', $favoriteId)
                    ->where('account_id', $accountId)
                    ->delete();
            }
            
            return redirect()->route('account.wishlist')->with('success', 'Product has been removed successfully');
        } else {
            return redirect()->route('account.wishlist')->with('error', 'Product not found');
        }
    }
    

}