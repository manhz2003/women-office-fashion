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
        Schema::create('product_size_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_color');
            $table->unsignedBigInteger('id_size');
            $table->string('id_product')->nullable(false);
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_color')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('id_size')->references('id')->on('sizes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_size_colors');
    }
};
