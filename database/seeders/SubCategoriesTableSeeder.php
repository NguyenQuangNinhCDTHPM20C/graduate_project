<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $sub_categories = [
            ['category_id' => 1,'name' => 'Laptop Gaming', 'image' => 'assets/subcategory/gaminglaptops.png', 'slug' => 'laptop-gaming','status' => 1],
            ['category_id' => 1,'name' => 'Laptop học tập và văn phòng', 'image' => 'assets/subcategory/officelaptops.png','slug' => 'laptop-hoc-tap-va-van-phong','status' => 1],
            ['category_id' => 1,'name' => 'Laptop đồ họa kỹ thuật', 'image' => 'assets/subcategory/graphiclaptops.png','slug' => 'laptop-do-hoa-ky-thuat','status' => 1],
            ['category_id' => 1,'name' => 'Macbook', 'image' => 'assets/subcategory/macbooklaptops.png','slug' => 'macbook','status' => 1],
            ['category_id' => 2,'name' => 'Pin', 'image' => 'assets/subcategory/chargings.png', 'slug' => 'pin','status' => 1],
            ['category_id' => 2,'name' => 'Bàn Phím', 'image' => 'assets/subcategory/keyboards.png', 'slug' => 'ban-phim','status' => 1],
            ['category_id' => 2,'name' => 'Ram', 'image' => 'assets/subcategory/rams.png','slug' => 'ram','status' => 1],
            ['category_id' => 2,'name' => 'Chuột', 'image' => 'assets/subcategory/mouses.png', 'slug' => 'chuot','status' => 1],
            ['category_id' => 3,'name' => 'Tin tức', 'image' => 'assets/subcategory/blog-news.png', 'slug' => 'tin-tuc','status' => 1],
            ['category_id' => 3,'name' => 'Đánh giá', 'image' => 'assets/subcategory/blog-reviews.png', 'slug' => 'danh-gia','status' => 1],
            ['category_id' => 3,'name' => 'Lời khuyên', 'image' => 'assets/subcategory/blog-tips.png', 'slug' => 'loi-khuyen','status' => 1],
            ['category_id' => 3,'name' => 'Trò chơi', 'image' => 'assets/subcategory/blog-games.png', 'slug' => 'tro-choi','status' => 1],
        ];

        DB::table('sub_categories')->insert($sub_categories);
    }
}