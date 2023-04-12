<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('secret'),
                'photo' => 'https://via.placeholder.com/150',
                'address' => '123 Main St, Anytown USA',
                'role' => 1,
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'janesmith@example.com',
                'password' => bcrypt('secret'),
                'photo' => 'https://via.placeholder.com/150',
                'address' => '456 Elm St, Anytown USA',
                'role' => 2,
                'status' => 1,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}