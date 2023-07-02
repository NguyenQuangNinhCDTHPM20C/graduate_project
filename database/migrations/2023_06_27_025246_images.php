<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entity_type');
            $table->unsignedBigInteger('entity_id');
            $table->string('image_path');
            $table->timestamps();
        
            $table->foreign('entity_id')->references('id')->on('products')->onDelete('cascade')->name('images_product_id_foreign');
            $table->foreign('entity_id')->references('id')->on('blogs')->onDelete('cascade')->name('images_blog_id_foreign');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}