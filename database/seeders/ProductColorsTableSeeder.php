<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_colors = [
            ['product_id' => '1', 'color_id' => '1', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '1', 'color_id' => '3', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '2', 'color_id' => '1', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '2', 'color_id' => '3', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '3', 'color_id' => '1', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '3', 'color_id' => '3', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '4', 'color_id' => '1', 'created_at' => now(),'updated_at' => now(),],
            ['product_id' => '4', 'color_id' => '2', 'created_at' => now(),'updated_at' => now(),],
        ];

        DB::table('product_colors')->insert($product_colors);
    }
}