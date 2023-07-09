<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $sub_categories = [
            ['category_id' => 1,'name' => 'Gaming laptops', 'image' => 'assets/subcategory/gaminglaptops.png', 'slug' => 'gaming-laptops','status' => 1],
            ['category_id' => 1,'name' => 'Study and office laptops', 'image' => 'assets/subcategory/officelaptops.png','slug' => 'study-office-laptops','status' => 1],
            ['category_id' => 1,'name' => 'Graphic and technical laptops', 'image' => 'assets/subcategory/graphiclaptops.png','slug' => 'graphic-and-technical-laptops','status' => 1],
            ['category_id' => 1,'name' => 'Macbook laptops', 'image' => 'assets/subcategory/macbooklaptops.png','slug' => 'macbook-laptops','status' => 1],
            ['category_id' => 2,'name' => 'Chargings', 'image' => 'assets/subcategory/chargings.png', 'slug' => 'chargings','status' => 1],
            ['category_id' => 2,'name' => 'Keyboards', 'image' => 'assets/subcategory/keyboards.png', 'slug' => 'keyboards','status' => 1],
            ['category_id' => 2,'name' => 'Rams', 'image' => 'assets/subcategory/rams.png','slug' => 'rams','status' => 1],
            ['category_id' => 2,'name' => 'Mouses', 'image' => 'assets/subcategory/mouses.png', 'slug' => 'mouses','status' => 1],
            ['category_id' => 3,'name' => 'News', 'image' => 'assets/subcategory/blog-news.png', 'slug' => 'news','status' => 1],
            ['category_id' => 3,'name' => 'Reviews', 'image' => 'assets/subcategory/blog-reviews.png', 'slug' => 'reviews','status' => 1],
            ['category_id' => 3,'name' => 'Tips', 'image' => 'assets/subcategory/blog-tips.png', 'slug' => 'tips','status' => 1],
            ['category_id' => 3,'name' => 'Games', 'image' => 'assets/subcategory/blog-games.png', 'slug' => 'games','status' => 1],
        ];

        DB::table('sub_categories')->insert($sub_categories);
    }
}