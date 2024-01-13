<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// trang test hiển thị product
Route::get('/admin/testProduct', [ProductsController::class, 'index']);

// trang test trung
Route::get('admin/trung', [TestController::class, 'index']);
