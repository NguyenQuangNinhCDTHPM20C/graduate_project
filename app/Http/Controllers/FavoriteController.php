<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\FavoriteDetail;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function getCount()
    {
       

        return $count;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
        ->where('favorites.account_id', '2')
        ->get();

        return view('public.pages.account.wishlist', compact('favorites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productId = $request->input('product_id');
        $accountId = 2;

        // Get favorite of user
        $favorite = Favorite::where('account_id', $accountId)->first();

        if ($favorite) {
            // Get ID favorite
             $favoriteId = $favorite->id;

              // Check if the product already exists in favorite_detail
                $existingFavoriteDetail = FavoriteDetail::where('favorite_id', $favoriteId)
                ->where('product_id', $productId)
                ->first();

            if (!$existingFavoriteDetail) {
                // Add product to favorite_detail
                $favoriteDetail = new FavoriteDetail();
                $favoriteDetail->favorite_id = $favoriteId;
                $favoriteDetail->product_id = $productId;
                $favoriteDetail->save();}
        } else {
            // Create new favorit and add account
            $favorite = new Favorite();
            $favorite->account_id = $accountId;
            $favorite->save();

            // Get ID favorite
            $favoriteId = $favorite->id;
            
            // Add product to favorite_detail
            $favoriteDetail = new FavoriteDetail();
            $favoriteDetail->favorite_id = $favoriteId;
            $favoriteDetail->product_id = $productId;
            $favoriteDetail->save();
        }

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào mục yêu thích.');
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
        $product = FavoriteDetail::findOrFail($id);
        $product->delete();
        return redirect()->route('account.wishlist')->with('Product has been removed successfully');
    }
}