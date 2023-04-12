<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryTableSeeder extends Seeder
{
    public function run()
    {
        $sub_categories = [
            [
                'category_id' => 1,
                'name' => 'Gaming laptops',
                'slug' => 'gaming-laptops',
                'status' => 1
            ],
            [
                'category_id' => 1,
                'name' => 'Business laptops',
                'slug' => 'business-laptops',
                'status' => 1
            ],
            [
                'category_id' => 2,
                'name' => 'Processors',
                'slug' => 'processors',
                'status' => 1
            ],
            [
                'category_id' => 2,
                'name' => 'Motherboards',
                'slug' => 'motherboards',
                'status' => 1
            ],
            [
                'category_id' => 3,
                'name' => 'Monitors',
                'slug' => 'monitors',
                'status' => 1
            ],
            [
                'category_id' => 3,
                'name' => 'Keyboards',
                'slug' => 'keyboards',
                'status' => 1
            ],
        ];

        DB::table('sub_category')->insert($sub_categories);
    }
}