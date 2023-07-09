<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_id')->nullable()->unsigned();
            $table->unsignedBigInteger('color_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->name('product_colors_product_id_foreign');
            $table->foreign('color_id')->references('id')->on('colors')->name('product_colors_color_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}