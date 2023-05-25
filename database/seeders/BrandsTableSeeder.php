<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            ['name' => 'Dell', 'slug' =>'dell', 'image' => 'dell.png'],
            ['name' => 'HP', 'slug' =>'hp','image' => 'hp.png'],
            ['name' => 'Lenovo','slug' =>'lenovo', 'image' => 'lenovo.png'],
            ['name' => 'Acer', 'slug' =>'acer','image' => 'acer.png'],
            ['name' => 'Asus', 'slug' =>'asus','image' => 'asus.png'],
        ];

        DB::table('brands')->insert($brands);
    }
}