<?php
use Illuminate\Support\Facades\DB;

DB::table('products')->insert([
    [
        'brand_id' => 1,
        'category_id' => 1,
        'sub_category_id' => 1,
        'name' => 'Dell Inspiron 15',
        'slug' => 'dell-inspiron-15',
        'code' => 'DI15',
        'quantity' => 50,
        'tag' => 'laptop',
        'selling_price' => 799.99,
        'discount_price' => 749.99,
        'description' => '15-inch laptop with a responsive performance, graphics, and features.',
        'image' => 'dell-inspiron-15.jpg',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'brand_id' => 2,
        'category_id' => 1,
        'sub_category_id' => 1,
        'name' => 'HP Pavilion 15',
        'slug' => 'hp-pavilion-15',
        'code' => 'HP15',
        'quantity' => 30,
        'tag' => 'laptop',
        'selling_price' => 849.99,
        'discount_price' => 799.99,
        'description' => '15-inch laptop with a sleek design and powerful performance for productivity and entertainment.',
        'image' => 'hp-pavilion-15.jpg',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'brand_id' => 3,
        'category_id' => 2,
        'sub_category_id' => 3,
        'name' => 'Logitech M510 Wireless Mouse',
        'slug' => 'logitech-m510-wireless-mouse',
        'code' => 'LGM510',
        'quantity' => 100,
        'tag' => 'mouse',
        'selling_price' => 29.99,
        'discount_price' => 24.99,
        'description' => 'Wireless mouse with a contoured shape and soft rubber grips for comfortable use.',
        'image' => 'logitech-m510-wireless-mouse.jpg',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'brand_id' => 4,
        'category_id' => 2,
        'sub_category_id' => 4,
        'name' => 'SanDisk Ultra Flair USB 3.0 Flash Drive',
        'slug' => 'sandisk-ultra-flair-usb-3-0-flash-drive',
        'code' => 'SDF32',
        'quantity' => 200,
        'tag' => 'flash drive',
        'selling_price' => 19.99,
        'discount_price' => 14.99,
        'description' => 'USB 3.0 flash drive with fast transfer speeds and a sleek metal design.',
        'image' => 'sandisk-ultra-flair-usb-3-0-flash-drive.jpg',
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);