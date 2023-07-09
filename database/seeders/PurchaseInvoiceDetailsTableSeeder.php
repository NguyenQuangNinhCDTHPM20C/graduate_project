<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseInvoiceDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase_invoice_details = [
        ['purchase_invoice_id' => 1,'product_code' => 'DI15','quantity' => 50,'price' => 15990000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'HP15','quantity' => 30,'price' => 14790000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'LEGION15IAH7','quantity' => 30,'price' => 23990000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'MACM1','quantity' => 100,'price' => 17290000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'WLHPZ3700','quantity' => 20,'price' => 240000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'KB8A','quantity' => 20,'price' => 2790000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'RKM1X4','quantity' => 20,'price' => 1150000,'created_at' => now(),'updated_at' => now(),],
        ['purchase_invoice_id' => 1,'product_code' => 'PASUSA32','quantity' => 20,'price' => 490000,'created_at' => now(),'updated_at' => now(),],
        ];
    }
}