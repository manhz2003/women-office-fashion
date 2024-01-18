<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\TestImagesController;
use App\Http\Controllers\Client\ProductsController as product;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;

// admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('/testProduct', [ProductsController::class, 'index'])->name('admin.testProduct');
    Route::get('/testImages', [TestImagesController::class, 'index'])->name('admin.testImages');
});

// auth
// route login
Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'checkUser']);

// đăng ký
Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('chinh-sach-rieng-tu', function () {
    return '<h1>chinh sach rieng tu</h1>';
});

Route::get('auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth-fb');
Route::get('auth/facebook/callback', [LogInController::class, 'handleFacebookCallback']);

// route google
Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth-google');
Route::get('auth/google/callback', [LogInController::class, 'handleGoogleCallback']);


// product home
Route::get('/', [product::class, 'ProductDressHome'])->name('/');

// fashion, product-new, product-sale, váy đầm
Route::get('/product-dress', [product::class, 'productRandomDress'])->name('product-dress');
Route::get('/product-fashion', [product::class, 'productRandomFashion'])->name('product-fashion');
Route::get('/product-sale', [product::class, 'productRandomSale'])->name('product-sale');
Route::get('/product-new', [product::class, 'productRandomNew'])->name('product-new');

// sắp xếp tăng giảm dress, product sale, product fashion, product new
Route::get('/product-dress/{sort?}', [product::class, 'sortProductDress'])->name('product-dress');
Route::get('/product-sale/{sort?}', [product::class, 'sortProductSale'])->name('product-sale');
Route::get('/product-fashion/{sort?}', [product::class, 'sortProductFashion'])->name('product-fashion');
Route::get('/product-new/{sort?}', [product::class, 'sortProductNew'])->name('product-new');

// trang bộ sưu tập
Route::get('/collection', function () {
    return view('client/pages/collection');
})->name('collection');

// giỏ hàng
Route::get('/cart', function () {
    return view('client/pages/cart');
})->name('cart');

// Giảm giá
Route::get('/sale-off', function () {
    return view('client/pages/sale-off');
})->name('sale-off');

// chi tiết sản phẩm
Route::get('/product-detail', function () {
    return view('client/pages/product-detail');
})->name('product-detail');

// đặt hàng thành công
Route::get('/order-success', function () {
    return view('client/pages/order-success');
})->name('order-success');

// thanh toán
Route::get('/payment', function () {
    return view('client/pages/payment');
})->name('payment');
