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
            $table->string('code');
            $table->integer('brand_id')->nullable()->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('sub_category_id')->nullable()->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('quantity')->default(0);
            $table->integer('selling_price');
            $table->integer('discount_price');
            $table->text('description');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
            
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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