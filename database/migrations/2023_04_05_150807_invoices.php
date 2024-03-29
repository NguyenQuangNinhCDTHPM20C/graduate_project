<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code');
            $table->integer('account_id')->nullable()->unsigned();
            $table->string('name',200);
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->text('notes')->nullable();
            $table->bigInteger('total');
            $table->string('payment_method');
            $table->tinyInteger('status')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}