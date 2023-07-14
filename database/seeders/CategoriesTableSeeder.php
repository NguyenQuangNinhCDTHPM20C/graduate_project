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
            ['name' => 'Laptop', 'slug' => 'laptops', 'type' => 'laptop',  'status' => 1, 'created_at' => now(),'updated_at' => now()],
            ['name' => 'Phụ kiện', 'slug' => 'accessories', 'type' => 'accessory', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Tin tức','slug' => 'blogs', 'type' => 'blog', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('categories')->insert($categories);
    }
}