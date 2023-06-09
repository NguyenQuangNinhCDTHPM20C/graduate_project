<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoice_details = [
            ['invoice_id' => 1,'product_id' => 1,'quantity' => 2,'price' => 16990000,'created_at' => now(),'updated_at' => now(),],
            ['invoice_id' => 1,'product_id' => 3,'quantity' => 1,'price' => 24990000,'created_at' => now(),'updated_at' => now(),],
            ['invoice_id' => 2,'product_id' => 2,'quantity' => 1,'price' => 15790000,'created_at' => now(),'updated_at' => now(),],
            ['invoice_id' => 2,'product_id' => 4,'quantity' => 2,'price' => 18290000,'created_at' => now(),'updated_at' => now(),],
        ];
        
        DB::table('invoice_details')->insert($invoice_details);
    }
}