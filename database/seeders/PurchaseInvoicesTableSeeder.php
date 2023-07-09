<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseInvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase_invoices = [
            ['code' => 'PC01', 'name' => 'JonhDoe', 'phone_number' => '0869694275', 'order_date' => '2022-03-15 10:30:00', 'total' => 3785300000, 'created_at' => '2022-03-15 10:30:00','updated_at' => '2022-03-15 10:30:00',],
        ];
        DB::table('purchase_invoices')->insert($purchase_invoices);
    }
}