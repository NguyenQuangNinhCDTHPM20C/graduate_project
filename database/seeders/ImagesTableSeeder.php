<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            ['entity_type' => 'product', 'entity_id' => '1', 'image_path' => [
                'assets/product/dell-inspiron-15.jpg'
            ], 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '2', 'image_path' => 'assets/product/hp-pavilion-15.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '3', 'image_path' => 'assets/product/lenovo-legion-5-15iah7-i5-82rc003wvn-a-thumb-600x600.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '4', 'image_path' => 'assets/product/macbook.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '5', 'image_path' => 'assets/product/logitech-m510-wireless-mouse.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '6', 'image_path' => 'assets/product/ban-phim-co-bluetooth-rapoo-v700-8a-4.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '7', 'image_path' => 'assets/product/ram.jpg', 'created_at' => now(),'updated_at' => now(),],
            ['entity_type' => 'product', 'entity_id' => '8', 'image_path' => 'assets/product/pin.jpg', 'created_at' => now(),'updated_at' => now(),],
        ];

        DB::table('images')->insert($images);
    }
}