<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\FavoriteDetail;
use Illuminate\Support\Facades\Auth;
class CountServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('Public.partial.header', function ($view) {
            $favoritesCount = 0;
            if (session()->has('username') && session()->has('photo')) {
                $userId = session('id_user');
                $favoritesCount = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
                    ->where('favorites.account_id', $userId)
                    ->count();
            }

            $view->with('favorite_count', $favoritesCount);
        });
    }



    

}