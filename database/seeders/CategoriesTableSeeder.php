<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Laptops', 'slug' => 'laptops', 'type' => 'laptop',  'status' => 1, 'created_at' => now(),'updated_at' => now()],
            ['name' => 'Accessories', 'slug' => 'accessories', 'type' => 'accessory', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Blogs','slug' => 'blogs', 'type' => 'blog', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('categories')->insert($categories);
    }
}