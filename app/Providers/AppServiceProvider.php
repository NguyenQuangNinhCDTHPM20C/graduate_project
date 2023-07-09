<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
    $this->app->bind('Category', function () {
        return new Category;
    });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $header_laptop_ctg = Category::where('type', 'laptop')->first();
        $header_accessory_ctg = Category::where('type', 'accessory')->first();
        $header_laptop_sub_ctg = SubCategory::where('category_id', $header_laptop_ctg->id)->get();
        $header_accessory_sub_ctg = SubCategory::where('category_id', $header_accessory_ctg->id)->get();
        $settings = Setting::first();
        View::share(['header_laptop_ctg' => $header_laptop_ctg, 'header_laptop_sub_ctg' => $header_laptop_sub_ctg, 'header_accessory_sub_ctg' => $header_accessory_sub_ctg, 'settings' => $settings, 'siteName' => 'Double-N Shop']);
    }
    
}