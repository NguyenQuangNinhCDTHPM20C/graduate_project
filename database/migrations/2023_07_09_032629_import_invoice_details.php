<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImportInvoiceDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('import_invoice_id')->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->integer('quantity')->default(0);
            $table->integer('price')->default(0.0);
            $table->timestamps();

            $table->foreign('import_invoice_id')->references('id')->on('import_invoices');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_invoice_details');
    }
}