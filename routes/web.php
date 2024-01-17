<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\TestImagesController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductsController as product;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;

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



// Route::get('/slide-product', [slide::class, 'slideProduct'])->name('/');

// trang home
// Route::get('/', function () {
//     return view('client/pages/home');
// })->name('/');
Route::get('/', [product::class, 'ProductDressHome'])->name('/');

// váy đầm
Route::get('/product-dress', [product::class, 'ProductDressPage'])->name('product-dress');

// fashion, product-new, product-sale
Route::get('/product-fashion', [product::class, 'viewProductFashion'])->name('product-fashion');
Route::get('/product-sale', [product::class, 'viewProductSale'])->name('product-sale');
Route::get('/product-new', [product::class, 'viewProductNew'])->name('product-new');

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
