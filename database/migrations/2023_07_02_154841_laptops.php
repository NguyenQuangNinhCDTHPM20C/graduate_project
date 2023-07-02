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
            $table->float('cpu_base_clock');
            $table->string('cpu_cache');
            $table->float('cpu_max_clock');
            $table->integer('cpu_cores');
            $table->integer('cpu_threads');
            $table->integer('ram_size');
            $table->string('ram_standard');
            $table->integer('ram_speed');
            $table->integer('storage_capacity');
            $table->boolean('supports_max_ram');
            $table->integer('empty_ram_slots');
            $table->string('ram_socket_type');
            $table->string('storage_type');
            $table->string('display_size');
            $table->string('display_resolution');
            $table->string('display_technology');
            $table->boolean('thin_bezels');
            $table->boolean('anti_glare');
            $table->integer('brightness');
            $table->integer('color_coverage');
            $table->integer('refresh_rate');
            $table->boolean('touch_screen');
            $table->string('graphics_vram');
            $table->boolean('onboard_graphics');
            $table->string('dedicated_graphics');
            $table->string('wireless_connectivity');
            $table->string('operating_system');
            $table->string('dimensions');
            $table->float('weight');
            $table->integer('battery_capacity');
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