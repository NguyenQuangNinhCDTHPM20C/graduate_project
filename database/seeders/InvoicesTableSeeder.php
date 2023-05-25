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
            ['code' => 1001,'account_id' => 1,'order_date' => '2022-03-15 10:30:00','name' => 'John Doe','address' => '123 Main St','phone' => '555-1234','email' => 'johndoe@example.com','notes' => 'Please deliver to back door.','total' => 1200.50,
             'payment_method' => 'Credit Card','status' => 1,'remember_token' => null,'created_at' => '2022-03-15 10:30:00','updated_at' => '2022-03-15 10:30:00',],
            ['code' => 1002,'account_id' => 2,'order_date' => '2022-03-16 11:00:00','name' => 'Jane Smith','address' => '456 Oak Ave','phone' => '555-5678','email' => 'janesmith@example.com','notes' =>'Please deliver to back door.','total' => 800.00,
             'payment_method' => 'PayPal','status' => 1,'remember_token' => null,'created_at' => '2022-03-16 11:00:00','updated_at' => '2022-03-16 11:00:00',],
        ];

        DB::table('invoices')->insert($invoices);
    }
}