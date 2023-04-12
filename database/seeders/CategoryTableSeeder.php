<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
        
    }
}