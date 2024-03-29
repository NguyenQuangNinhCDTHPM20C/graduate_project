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
        $accountId = session('account')->id;
        $favorites = FavoriteDetail::join('favorites', 'favorite_details.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', $accountId)
        ->get();
        $count_favorites = FavoriteDetail::join('favorites', 'favorite_details.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', $accountId)
        ->count();
        return view('public.pages.account.favorite', compact('favorites'));
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
             $accountId = session('account')->id;
     
             // Get or create favorite of user
             $favorite = Favorite::firstOrCreate(['account_id' => $accountId]);
     
             // Get ID favorite
             $favoriteId = $favorite->id;
     
             // Check exits product in favorite_detail
             $existingFavoriteDetail = FavoriteDetail::where('favorite_id', $favoriteId)
                 ->where('product_id', $productId)
                 ->first();
     
             if (!$existingFavoriteDetail) {
                 // Add product to favorite_detail
                 $favoriteDetail = new FavoriteDetail();
                 $favoriteDetail->favorite_id = $favoriteId;
                 $favoriteDetail->product_id = $productId;
                 $favoriteDetail->save();
                 session()->put('success', 'Sản phẩm đã được thêm vào mục yêu thích !');
                 return redirect()->back();
             } 
         } else {
             session()->put('error', 'Vui lòng đăng nhập!');
             return redirect()->route('public.login');
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
        $favoriteDetail = FavoriteDetail::where('favorite_id', $id)->first();

        if ($favoriteDetail) {
            $favoriteDetail->delete();   
            session()->put('success', 'Đã xóa sản phẩm khỏi danh sách yêu thích !') ;
        }
        else
        {
            session()->put('error', 'Không tìm thấy phần tử để xóa.') ;    
        }
        return redirect()->back();
       
    }

    public function destroy_2($id)
    {
        $account_id = session('account')->id;
        $favorite = Favorite::where('account_id', $account_id)->first();
        $favorite_detail = FavoriteDetail::where('favorite_id', $favorite->id)->where('product_id', $id)->first();

        if ($favorite_detail) {
            $favorite_detail->delete();  
            session()->put('success', 'Đã xóa sản phẩm khỏi danh sách yêu thích !') ;          
        }else{
            session()->put('error', 'Không tìm thấy phần tử để xóa.') ;
        }
        return redirect()->back();
    }

}