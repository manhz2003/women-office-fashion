<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\TestImagesController;
use App\Http\Controllers\Client\ProductDetailController;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ActiveAccountController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Client\SaleOffController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductNewController;
use App\Http\Controllers\Client\ProductDressController;
use App\Http\Controllers\Client\ProductFashionController;
use App\Http\Controllers\Client\ProductSaleController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CollectionController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\PaymentController;

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
Route::get('/', [HomeController::class, 'viewHome'])->name('/');

// product-sale
Route::get('/product-sale', [ProductSaleController::class, 'viewProductSale'])->name('product-sale');
Route::get('/product-sale/{sort?}', [ProductSaleController::class, 'sortProductSale'])->name('product-sale');

// product-new
Route::get('/product-new', [ProductNewController::class, 'viewProductNew'])->name('product-new');
Route::get('/product-new/{sort?}', [ProductNewController::class, 'sortProductNew'])->name('product-new');

// product-dress
Route::get('/product-dress', [ProductDressController::class, 'viewProductDress'])->name('product-dress');
Route::get('/product-dress/{sort?}', [ProductDressController::class, 'sortProductDress'])->name('product-dress');

// product-fashion
Route::get('/product-fashion', [ProductFashionController::class, 'viewProductFashion'])->name('product-fashion');
Route::get('/product-fashion/{sort?}', [ProductFashionController::class, 'sortProductFashion'])->name('product-fashion');

// product-detail
Route::get('/product-detail/{id}', [ProductDetailController::class, 'viewProductDetail'])->name('product-detail');

// sale off
Route::get('/sale-off', [SaleOffController::class, 'viewSaleOff'])->name('sale-off');

// cart
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart');
Route::post('/cart', [CartController::class, 'processCart'])->name('cart.process');
Route::get('/cart/{cartItemId}', [CartController::class, 'deleteCartItem'])->name('cart.delete');

// collection
Route::get('/collection', [CollectionController::class, 'viewCollection'])->name('collection');

// order-success
Route::get('/order-success', [OrderController::class, 'viewOrderSuccess'])->name('order-success');

// payment
Route::get('/payment', [PaymentController::class, 'viewPayment'])->name('payment');
Route::post('/insert-payment', [PaymentController::class, 'insertPayment'])->name('insert-payment');
