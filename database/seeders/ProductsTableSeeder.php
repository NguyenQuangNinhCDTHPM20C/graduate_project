<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['brand_id' => 1,'category_id' => 1,'sub_category_id' => 1,'name' => 'Dell Inspiron 15','slug' => 'dell-inspiron-15','code' => 'DI15','quantity' => 50, 'selling_price' => 23990000,'discount_price' => 16990000,
             'description' => '15-inch laptop with a responsive performance, graphics, and features.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 1],
            ['brand_id' => 2,'category_id' => 1,'sub_category_id' => 2,'name' => 'HP Pavilion 15','slug' => 'hp-pavilion-15','code' => 'HP15','quantity' => 30, 'selling_price' => 20490000,'discount_price' => 15790000,
             'description' => '15-inch laptop with a sleek design and powerful performance for productivity and entertainment.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 2],
            ['brand_id' => 3,'category_id' => 1,'sub_category_id' => 3,'name' => 'Laptop Lenovo Legion 5 15IAH7','slug' => 'laptop-lenovo-legion-5-15iah7','code' => 'LEGION15IAH7','quantity' => 30, 'selling_price' => 32190000,'discount_price' => 24990000,
             'description' => '15-inch laptop with a sleek design and powerful performance for productivity and entertainment.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 3],
            ['brand_id' => 6,'category_id' => 1,'sub_category_id' => 4,'name' => 'Laptop Apple MacBook Air 13 inch M1','slug' => 'laptop-apple-macbook-air-13-inch-m1','code' => 'MACM1','quantity' => 100, 'selling_price' => 27990000,'discount_price' => 18290000,
             'description' => 'Wireless mouse with a contoured shape and soft rubber grips for comfortable use.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 4],
            ['brand_id' => 2,'category_id' => 2,'sub_category_id' => 8,'name' => 'Wireless Mouse HP Z3700','slug' => 'wireless-mouse-hp-Z3700','code' => 'WLHPZ3700','quantity' => 20, 'selling_price' => 759000,'discount_price' => 340000,
             'description' => 'USB 3.0 flash drive with fast transfer speeds and a sleek metal design.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 5],
            ['brand_id' => 3,'category_id' => 2,'sub_category_id' => 6,'name' => 'Rapoo V700 Bluetooth Mechanical Keyboard - 8A','slug' => 'rapoo-v700-bluetooth-mechanical-keyboard-8a','code' => 'KB8A','quantity' => 20, 'selling_price' => 3499000,'discount_price' => 2890000,
             'description' => 'USB 3.0 flash drive with fast transfer speeds and a sleek metal design.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 6],
            ['brand_id' => 4,'category_id' => 2,'sub_category_id' => 7,'name' => 'RAM laptop KINGMAX (1x4GB) DDR3L 1600MHz','slug' => 'ram-laptop-kingmax-(1x4gb)-DDR3L-1600MHz','code' => 'RKM1X4','quantity' => 20, 'selling_price' => 1712000,'discount_price' => 1250000,
             'description' => 'USB 3.0 flash drive with fast transfer speeds and a sleek metal design.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 7],
            ['brand_id' => 5,'category_id' => 2,'sub_category_id' => 5,'name' => 'Pin laptop Asus A32-K55','slug' => 'pin-laptop-asus-A32-K55','code' => 'PASUSA32','quantity' => 20, 'selling_price' => 590000,'discount_price' => 590000,
             'description' => 'USB 3.0 flash drive with fast transfer speeds and a sleek metal design.', 'status' => 1,'created_at' => now(),'updated_at' => now(), 'featured_image_id' => 8],
        ];
        
        DB::table('products')->insert($products);
    }
}