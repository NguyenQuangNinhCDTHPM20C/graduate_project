<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PurchaseInvoiceDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_invoice_id')->unsigned();
            $table->string('product_code');
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('purchase_invoice_id')->references('id')->on('purchase_invoices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_invoice_details');
    }
}