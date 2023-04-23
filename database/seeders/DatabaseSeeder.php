<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('accounts')-> insert([
            [
                'id'=> 1,
                'name' => 'Nguyễn Thanh Nhã',
                'username' => 'nha',
                'email' => 'nguyenthanhnha959@gmail.com',
                'password' => Hash::make('123456'),
                'address' => 'Long An',
                'photo'=>1,
                'role' => 1,
                'status' =>1,
            ],
            [
                'id' => 2,
                'name' => 'Nguyễn Thanh A',
                'username' => 'abc',
                'email' => 'abc123@gmail.com',
                'password' => Hash::make('123456'),
                'address' => 'Long An',
                'photo'=>1,
                'role' => 0,
                'status' => 1,
            ]
            ]);
    }
}
