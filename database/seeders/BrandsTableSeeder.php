<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            ['name' => 'Dell', 'slug' =>'dell', 'image' => 'assets/brand/dell.png'],
            ['name' => 'HP', 'slug' =>'hp','image' => 'assets/brand/hp.png'],
            ['name' => 'Lenovo','slug' =>'lenovo', 'image' => 'assets/brand/lenovo.png'],
            ['name' => 'Acer', 'slug' =>'acer','image' => 'assets/brand/acer.png'],
            ['name' => 'Asus', 'slug' =>'asus','image' => 'assets/brand/asus.png'],
            ['name' => 'Macbook', 'slug' =>'macbook','image' => 'assets/brand/macbook.jpg'],
        ];

        DB::table('brands')->insert($brands);
    }
}