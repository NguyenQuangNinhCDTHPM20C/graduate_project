<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FavoriteDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
            Schema::create('favorite_detail', function (Blueprint $table) {
                $table->id();
                $table->integer('product_id')->unsigned();
                $table->integer('favorite_id')->unsigned();
                $table->timestamps();
                $table->foreign('product_id')->references('id')->on('products');
                $table->foreign('favorite_id')->references('id')->on('favorites');
            }, 'favorite_detail'); // Chỉ định tên bảng là 'favorite_detail'
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_detail');
    }
}