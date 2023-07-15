<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportInvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $import_invoices = [
            ['code' => 'PC01', 'account_id' => 1, 'supplier' => 'Thế giới di động', 'total' => 3785300000, 'status' => 1, 'created_at' => '2022-03-15 10:30:00','updated_at' => '2022-03-15 10:30:00',],
        ];
        DB::table('import_invoices')->insert($import_invoices);
    }
}