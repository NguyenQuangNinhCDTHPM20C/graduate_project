<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            ['account_id' => 1,'product_id' => 1,'comment' => 'This laptop is amazing!','rating' => '5 stars','status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 1,'comment' => 'I love this laptop!','rating' => '4 stars','status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['account_id' => 1,'product_id' => 2,'comment' => 'Great keyboard and display!','rating' => '4 stars','status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 3,'comment' => 'This desktop is a beast!','rating' => '5 stars','status' => 1,'created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 3,'comment' => 'Fast and reliable!','rating' => '4 stars','status' => 1,'created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('reviews')->insert($reviews);
    }
}