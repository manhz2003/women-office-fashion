<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\TestImagesController;
use App\Http\Controllers\Client\ProductsController as product;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ActiveAccountController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Client\SaleOffController;

// admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('/testProduct', [ProductsController::class, 'index'])->name('admin.testProduct');
    Route::get('/testImages', [TestImagesController::class, 'index'])->name('admin.testImages');
});

// login
Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'checkUser']);

// facebook
Route::get('auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth-fb');
Route::get('auth/facebook/callback', [LogInController::class, 'handleFacebookCallback']);

// google
Route::get('auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth-google');
Route::get('auth/google/callback', [LogInController::class, 'handleGoogleCallback']);

// đăng ký
Route::get('/register', [RegisterController::class, 'viewRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'createAccout']);

// kích hoạt
Route::get('/activate-account/{id}', [ActiveAccountController::class, 'activateAccount'])->name('activate.account');

// reset mật khẩu
Route::get('/reset', [ResetPasswordController::class, 'view'])->name('reset');
Route::post('/reset', [ResetPasswordController::class, 'checkUser'])->name('reset-password');

// quên mật khẩu
Route::get('/forgot', [ForgotPasswordController::class, 'viewForgotPassword'])->name('auth.passwords.forgot');
Route::post('/forgot', [ForgotPasswordController::class, 'forgotPassword']);

// product home
Route::get('/', [product::class, 'productRandomHome'])->name('/');

// fashion, product-new, product-sale, váy đầm, sale-off, product-detail, cart
Route::get('/product-dress', [product::class, 'productRandomDress'])->name('product-dress');
Route::get('/product-fashion', [product::class, 'productRandomFashion'])->name('product-fashion');
Route::get('/product-sale', [product::class, 'productRandomSale'])->name('product-sale');
Route::get('/product-new', [product::class, 'productRandomNew'])->name('product-new');
Route::get('/product-detail', [product::class, 'productRandomDetail'])->name('product-detail');
Route::get('/cart', [product::class, 'productRandomCart'])->name('cart');

// product
Route::get('/sale-off', [product::class, 'productRandomsaleOff'])->name('sale-off');

// sale
// Route::get('/sale-off/c', [SaleOffController::class, 'productSaleOffCode'])->name('sale-code');

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
// Route::get('/cart', function () {
//     return view('client/pages/cart');
// })->name('cart');

// đặt hàng thành công
Route::get('/order-success', function () {
    return view('client/pages/order-success');
})->name('order-success');

// thanh toán
Route::get('/payment', function () {
    return view('client/pages/payment');
})->name('payment');
