<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class); 
        $this->call(ImagesTableSeeder::class);  
        $this->call(ProductsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(InvoiceDetailsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);    
        $this->call(BlogsTableSeeder::class);   
        $this->call(ProductColorsTableSeeder::class);
    }
}