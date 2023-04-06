<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->string('name',200);
            $table->string('slug')->unique();
            $table->string('code');
            $table->integer('quantity');
            $table->string('tag');
            $table->float('selling_price');
            $table->float('discount_price');
            $table->string('desription');
            $table->string('image');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps(); // creawted_at, updated_at
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('sub_category_id')->references('id')->on('sub_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
