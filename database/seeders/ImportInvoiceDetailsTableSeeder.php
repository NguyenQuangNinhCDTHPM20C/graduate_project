<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportInvoiceDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $import_invoice_details = [
        ['import_invoice_id' => 1,'product_id' => 1,'quantity' => 50,'price' => 15990000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 2,'quantity' => 30,'price' => 14790000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 3,'quantity' => 30,'price' => 23990000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 4,'quantity' => 100,'price' => 17290000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 5,'quantity' => 20,'price' => 240000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 6,'quantity' => 20,'price' => 2790000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 7,'quantity' => 20,'price' => 1150000,'created_at' => now(),'updated_at' => now(),],
        ['import_invoice_id' => 1,'product_id' => 8,'quantity' => 20,'price' => 490000,'created_at' => now(),'updated_at' => now(),],
        ];
        DB::table('import_invoice_details')->insert($import_invoice_details);
    }
}