<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'Laptops', 'slug' => 'laptops', 'image' => 'laptop.png', 'status' => 1, 'created_at' => now(),'updated_at' => now()],
            ['name' => 'Desktops', 'slug' => 'desktops', 'image' => 'desktop.png', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['name' => 'Computer Components','slug' => 'computer-components', 'image' => 'computer_component.png', 'status' => 1,'created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('category')->insert($category);
    }
}