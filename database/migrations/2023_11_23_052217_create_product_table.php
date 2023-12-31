<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('product_name');
            $table->decimal('original_price',10,2);
            $table->decimal('selling_price',10,2);
            $table->string('ram');
            $table->string('memory');
            $table->string('made_in');
            $table->string('monitor');
            $table->string('screen_size');
            $table->string('front_camera');
            $table->string('back_camera');
            $table->string('cpu');
            $table->String('resolution');
            $table->string('wifi_speed');
            $table->string('system_operating');
            $table->string('status');
            $table->string('quantity');
            $table->string('detail');
            $table->foreign('cat_id')->references('cat_id')->on('catogory');
            $table->foreign('brand_id')->references('brand_id')->on('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
