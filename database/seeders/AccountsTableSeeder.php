<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {
        $accounts = [
            ['name' => 'John Doe', 'username' => 'johndoe', 'email' => 'johndoe@example.com', 'email_verified_at'=>now(), 'password' => bcrypt('secret'),'photo' => 'assets/user/avtuser1.jpg', 'address' => '123 Main St, Anytown USA', 'phone_number' => null, 'role' => 1, 'status' => 1,'remember_token' => null, 'verification_token' => null, 'google_id' => null, 'facebook_id' => null, 'qr_token' => null, 'created_at' => now(), 'updated_at' => now(),],
            ['name' => 'Jane Smith', 'username' => 'janesmith', 'email' => 'janesmith@example.com', 'email_verified_at'=>now(), 'password' => bcrypt('secret'),'photo' => 'assets/user/avtuser2.png', 'address' => '123 Main St, Anytown USA', 'phone_number' => null, 'role' => 2, 'status' => 1,'remember_token' => null, 'verification_token' => null, 'google_id' => null, 'facebook_id' => null, 'qr_token' => null, 'created_at' => now(), 'updated_at' => now(),],
        ];

        DB::table('accounts')->insert($accounts);
    }
}