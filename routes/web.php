<?php

use App\Admin\Controllers\customersController;
use App\Admin\Controllers\ordersController;
use App\Admin\Controllers\paymentsController;
use App\Admin\Controllers\productsController;
use App\Admin\Controllers\usersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page/home');
})->name('home');

Route::get('/product', function () {
    return view('page/product');
})->name('product');

Route::get('/product-details', function () {
    return view('page/product-details');
})->name('product_details');

Route::get('/checkout', function () {
    return view('page/checkout');
})->name('checkout');

Route::get('/cart', function () {
    return view('page/cart');
})->name('cart');

Route::get('/login', function () {
    return view('page/login');
})->name('login');

Route::get('/blog-single', function () {
    return view('page/blog-single');
})->name('blog-single');

Route::get('/blog', function () {
    return view('page/blog');
})->name('blog');

Route::get('/404', function () {
    return view('page/404');
})->name('404');

Route::get('/contact', function () {
    return view('page/contact');
})->name('contact');

$router->resource('admin/customers', customersController::class);
$router->resource('admin/products', productsController::class);
$router->resource('admin/payments', paymentsController::class);
$router->resource('admin/orders', ordersController::class);