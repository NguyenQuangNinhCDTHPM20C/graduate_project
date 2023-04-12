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
        DB::table('accounts')->insert([
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('secret'),
                'photo' => 'https://via.placeholder.com/150',
                'address' => '123 Main St, Anytown USA',
                'role' => 1,
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'janesmith@example.com',
                'password' => bcrypt(' secret'),
                'photo' => 'https://via.placeholder.com/150',
                'address' => '456 Elm St, Anytown USA',
                'role' => 2,
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $brands = [
            ['name' => 'Dell', 'slug' =>'dell', 'image' => 'dell.png'],
            ['name' => 'HP', 'slug' =>'hp','image' => 'hp.png'],
            ['name' => 'Lenovo','slug' =>'lenovo', 'image' => 'lenovo.png'],
            ['name' => 'Acer', 'slug' =>'acer','image' => 'acer.png'],
            ['name' => 'Asus', 'slug' =>'asus','image' => 'asus.png'],
        ];
        DB::table('brands')->insert($brands);

        DB::table('category')->insert([
            [
                'name' => 'Laptops',
                'slug' => 'laptops',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desktops',
                'slug' => 'desktops',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Computer Components',
                'slug' => 'computer-components',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
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
        DB::table('invoices')->insert([
            [
                'code' => 1001,
                'account_id' => 1,
                'order_date' => '2022-03-15 10:30:00',
                'name' => 'John Doe',
                'address' => '123 Main St',
                'phone' => '555-1234',
                'email' => 'johndoe@example.com',
                'notes' => 'Please deliver to back door.',
                'total' => 1200.50,
                'payment_method' => 'Credit Card',
                'status' => 1,
                'remember_token' => null,
                'created_at' => '2022-03-15 10:30:00',
                'updated_at' => '2022-03-15 10:30:00',
            ],
            [
                'code' => 1002,
                'account_id' => 2,
                'order_date' => '2022-03-16 11:00:00',
                'name' => 'Jane Smith',
                'address' => '456 Oak Ave',
                'phone' => '555-5678',
                'email' => 'janesmith@example.com',
                'notes' =>'Please deliver to back door.',
                'total' => 800.00,
                'payment_method' => 'PayPal',
                'status' => 1,
                'remember_token' => null,
                'created_at' => '2022-03-16 11:00:00',
                'updated_at' => '2022-03-16 11:00:00',
            ],
            // [
            //     'code' => 1003,
            //     'account_id' => 3,
            //     'order_date' => '2022-03-17 13:30:00',
            //     'name' => 'Bob Johnson',
            //     'address' => '789 Elm St',
            //     'phone' => '555-9012',
            //     'email' => 'bobjohnson@example.com',
            //     'notes' => 'Call before delivery.',
            //     'total' => 1500.75,
            //     'payment_method' => 'Cash on Delivery',
            //     'status' => 1,
            //     'remember_token' => null,
            //     'created_at' => '2022-03-17 13:30:00',
            //     'updated_at' => '2022-03-17 13:30:00',
            // ],
        ]);
        DB::table('invoice_detail')->insert([
            [
                'invoice_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'price' => 2000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'invoice_id' => 1,
                'product_id' => 3,
                'quantity' => 1,
                'price' => 3000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'invoice_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 1500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'invoice_id' => 2,
                'product_id' => 4,
                'quantity' => 2,
                'price' => 3500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('reviews')->insert([
            [
                'account_id' => 1,
                'product_id' => 1,
                'comment' => 'This laptop is amazing!',
                'rating' => '5 stars',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_id' => 2,
                'product_id' => 1,
                'comment' => 'I love this laptop!',
                'rating' => '4 stars',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_id' => 1,
                'product_id' => 2,
                'comment' => 'Great keyboard and display!',
                'rating' => '4 stars',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_id' => 2,
                'product_id' => 3,
                'comment' => 'This desktop is a beast!',
                'rating' => '5 stars',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'account_id' => 2,
                'product_id' => 3,
                'comment' => 'Fast and reliable!',
                'rating' => '4 stars',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}