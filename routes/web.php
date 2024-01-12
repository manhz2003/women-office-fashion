<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
});

// trang test hiển thị product
Route::get('/admin/testProduct', [ProductsController::class, 'index']);
