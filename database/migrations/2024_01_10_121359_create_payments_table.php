<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('id')->unique()->nullable(false);
            $table->string('user_address')->nullable(false);
            $table->string('method_pay');
            $table->double('total', 8, 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            // $table->unsignedBigInteger('order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
