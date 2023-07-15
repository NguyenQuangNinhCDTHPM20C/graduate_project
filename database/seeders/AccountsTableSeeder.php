<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    public function run()
    {
        $accounts = [
            ['name' => 'John Doe', 'username' => 'johndoe', 'email' => 'johndoe@example.com', 'email_verified_at'=>now(), 'password' => bcrypt('123456'),'photo' => 'assets/user/user.jpg', 'address' => 'Ấp 1', 'district' => 'Thành phố Tân An', 'province' => 'Tỉnh Long An', 'phone_number' => '0869694275', 'role' => 1, 'status' => 1,'remember_token' => null, 'verification_token' => null, 'google_id' => null, 'facebook_id' => null, 'created_at' => now(), 'updated_at' => now(),],
            ['name' => 'Jane Smith', 'username' => 'janesmith', 'email' => 'janesmith@example.com', 'email_verified_at'=>now(), 'password' => bcrypt('123456'),'photo' => 'assets/user/user.jpg', 'address' => 'Thôn 1', 'district' => 'Huyện KBang', 'province' => 'Tỉnh Gia Lai', 'phone_number' => '0869694275', 'role' => 2, 'status' => 1,'remember_token' => null, 'verification_token' => null, 'google_id' => null, 'facebook_id' => null, 'created_at' => now(), 'updated_at' => now(),],
        ];

        DB::table('accounts')->insert($accounts);
    }
}