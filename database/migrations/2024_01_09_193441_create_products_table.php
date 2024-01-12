<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->unique()->nullable(false);
            $table->string('name')->nullable(false);
            $table->double('old_price', 8, 2)->nullable();
            $table->double('new_price', 8, 2)->nullable();
            $table->string('thumbnail')->nullable(); // ảnh chính của product
            $table->integer('quantity')->unsigned()->nullable();
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
