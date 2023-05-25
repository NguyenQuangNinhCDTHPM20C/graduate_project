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
        $this->call(CategoryTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(InvoiceDetailTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);        
    }
}