<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laptops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_id')->nullable()->unsigned();
            $table->string('cpu_brand');
            $table->string('cpu_series');
            $table->string('cpu_model');
            $table->string('cpu_base_clock');
            $table->string('cpu_cache');
            $table->string('cpu_max_clock');
            $table->string('cpu_cores');
            $table->string('cpu_threads');
            $table->string('ram_size');
            $table->string('ram_standard');
            $table->string('ram_speed');
            $table->string('storage_capacity');
            $table->string('ram_socket_type');
            $table->string('storage_type');
            $table->string('display_size');
            $table->string('display_resolution');
            $table->string('display_technology');
            $table->string('refresh_rate');
            $table->string('graphics_vram');
            $table->string('onboard_graphics');
            $table->string('dedicated_graphics');
            $table->string('wireless_connectivity');
            $table->string('operating_system');
            $table->string('dimensions');
            $table->string('weight');
            $table->string('battery_capacity');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->name('laptops_product_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}