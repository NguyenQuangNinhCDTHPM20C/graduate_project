<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = [
            ['code' => 1001,'account_id' => 1, 'name' => 'John Doe','address' => 'Ấp 1, Thành phố Tân An, Tỉnh Long An','phone' => '0869694275','email' => 'johndoe@example.com','notes' => 'Please deliver to back door.','total' => 58970000,
             'payment_method' => 'Credit Card','status' => 3, 'created_at' => '2022-03-15 10:30:00','updated_at' => '2022-03-15 10:30:00',],
            ['code' => 1002,'account_id' => 2, 'name' => 'Jane Smith','address' => 'Thôn 1, Huyện KBang, Tỉnh Gia Lai','phone' => '0869694275','email' => 'janesmith@example.com','notes' =>'Please deliver to back door.','total' => 5237000,
             'payment_method' => 'PayPal','status' => 3, 'created_at' => '2022-03-16 11:00:00','updated_at' => '2022-03-16 11:00:00',],
        ];

        DB::table('invoices')->insert($invoices);
    }
}