<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            ['category_id' => 3,'sub_category_id' => 9,'author' => 'John Doe','title' => 'First Blog Post','slug' => 'first-blog-post','image' => 'Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.','created_at' => now(),'updated_at' => now(),],
            ['category_id' => 3,'sub_category_id' => 10,'author' => 'Jane Smith','title' => 'Second Blog Post','slug' => 'second-blog-post','image' => 'Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','created_at' => now(),'updated_at' => now(),],
            ['category_id' => 3,'sub_category_id' => 11,'author' => 'Jane Smith','title' => 'Three Blog Post','slug' => 'three-blog-post','image' => 'Apple-phat-hanh-iOS-17-Beta-2.jpg','content' => 'he GoLogicXL logic analyzer makes digital test and debug fast and easy. The best logic analyzer helps solve circuit design problems quickly. NCI logic analyzers find timing errors missed by other Test And Measurement Tools.','created_at' => now(),'updated_at' => now(),],
        ];

        DB::table('blogs')->insert($blogs);
    }
}