<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['name' => 'Đen','created_at' => now(),'updated_at' => now(),],
            ['name' => 'Đỏ','created_at' => now(),'updated_at' => now(),],
            ['name' => 'Trắng','created_at' => now(),'updated_at' => now(),],
        ];

        DB::table('colors')->insert($colors);
    }
}