<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    require base_path('routes/includes/fortify.php');
    require base_path('routes/includes/jetstream.php');
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::name('front.')->group(function () {
        Route::get('/', function () {
            return view('front.home');
        })->name("home");
        Route::get('/products', function () {
            return view('front.products');
        })->name('products');
        Route::get('/about-us', function () {
            return view('front.about_us');
        })->name("about-us");
        Route::get('/contact-us', function () {
            return view('front.contact_us');
        })->name('contact-us');
        Route::get('/cart', function () {
            return view('front.cart');
        })->name("cart");
        Route::get('/product', function () {
            return view('front.product');
        })->name('product');
        Route::get('/departments', function () {
            return view('front.departments');
        })->name('departments');
        Route::get('/invoice', function () {
            return view('front.client.invoice');
        })->name('checkout');
        Route::get('/order-status', function () {
            return view('front.client.confirm-order');
        })->name('order-status');
//        Route::get('/profile', function () {
//            return view('front.confirm-order');
//        })->name('order-status');

    });


    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

});
