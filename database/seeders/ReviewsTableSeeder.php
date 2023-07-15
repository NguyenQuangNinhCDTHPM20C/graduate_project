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
            ['account_id' => 1,'product_id' => 1,'comment' => 'Máy tính xách tay này thật tuyệt vời!','rating' => '5','created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 1,'comment' => 'Tôi yêu máy tính này','rating' => '4','created_at' => now(),'updated_at' => now(),],
            ['account_id' => 1,'product_id' => 2,'comment' => 'Bàn phím và màn hình tuyệt vời!','rating' => '4','created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 3,'comment' => 'Máy tính để bàn này thật tốt','rating' => '5','created_at' => now(),'updated_at' => now(),],
            ['account_id' => 2,'product_id' => 3,'comment' => 'Nhanh chóng và đáng tin cậy!','rating' => '4','created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('reviews')->insert($reviews);
    }
}