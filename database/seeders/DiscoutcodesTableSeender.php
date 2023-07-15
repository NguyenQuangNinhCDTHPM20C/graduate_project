<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscoutcodesTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount_codes = [
            ['code' => '123', 'discount_amount' => 10 ,'created_at' => now(),'updated_at' => now(),],
            ['code' => '456', 'discount_amount' => 20 ,'created_at' => now(),'updated_at' => now(),],
            ['code' => '789', 'discount_amount' => 50 ,'created_at' => now(),'updated_at' => now(),],
        ];
        DB::table('discount_codes')->insert($discount_codes);
    }
}
