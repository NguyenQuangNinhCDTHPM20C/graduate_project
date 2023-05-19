<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\FavoriteDetail;

class CountServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('Public.partial.header', function ($view) {
            $favoritesCount = FavoriteDetail::join('favorites', 'favorite_detail.favorite_id', '=', 'favorites.id')
                ->where('favorites.account_id', '2')
                ->count();

            $view->with('favorite_count', $favoritesCount);
        });
    }

}