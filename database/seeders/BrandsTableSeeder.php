<?php

use Illuminate\Support\Str;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            ['name' => 'Dell', 'image' => 'dell.png'],
            ['name' => 'HP', 'image' => 'hp.png'],
            ['name' => 'Lenovo', 'image' => 'lenovo.png'],
            ['name' => 'Acer', 'image' => 'acer.png'],
            ['name' => 'Asus', 'image' => 'asus.png'],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand['name'],
                'slug' => Str::slug($brand['name'], '-'),
                'image' => $brand['image'],
            ]);
        }
    }
}