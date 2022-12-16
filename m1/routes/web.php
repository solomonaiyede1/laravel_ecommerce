<?php

use Illuminate\Support\Facades\Route;

use App\Events\PaidEvent;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;




Route::get('/success', [OrderController::class, 'show_paid']);
Route::get('/success1', [OrderController::class, 'show1']);
   
   
Route::get('/test', [ShowController::class, 'test']);

Route::get('/t1', function () {
    return view('main');
});


Route::get('/show', [CategoryController::class, 'show']);



Route::get('/', function () {
    return view('welcome');
});
Route::get('/malls', function () {
    return view('malls');
});
Route::get('/superstores', function () {
    return view('superstores');
});
Route::get('/', [ProductController::class, 'show1']);
Route::post('/category', [CategoryController::class, 'show']);


Route::get('/single_product/{id}', [ProductController::class, 'display']);
Route::get('/single_product', function(){
    return view('/single_product');
});


Route::post('/addToCart/{id}', [ProductController::class, 'addToCart']);
Route::get('/addToCart', function(){
 return view('addToCart');
});

Route::get('/order', function(){
    return view('order');
})->middleware('auth');
Route::get('/payment1', [ProductController::class, 'payment']);
Route::post('/payment1', [ShowController::class, 'orderReal']);



Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/addToCart/{id}', [ProductController::class, 'addToCart']);
Route::delete('/delete', [ProductController::class, 'remove']);
Route::post('/addToCart', [ProductController::class, 'payment']);
Route::get('/addToCart/{id}', [ProductController::class, 'update_cart']);

Route::get('/home-search', [ProductController::class, 'show3']);
Route::post('/home-search', [ProductController::class, 'search3']);
Route::get('/product-admin-search', [ProductController::class, 'search1']);
Route::post('/product-admin-search', [ProductController::class, 'search2']);

   

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/product-admin', function () {
    return view('product-admin');
})->name('product-admin');

Route::get('/product-admin', [ProductController::class, 'show']);
Route::post('/product-admin', [ProductController::class, 'insert']);

Route::get('/product-admin-edit/{id}', [ProductController::class, 'editProduct']);
Route::post('/product-admin-edit/{id}', [ProductController::class, 'updateProduct']);

Route::get('/product-admin-delete/{id}', [ProductController::class, 'deleteView']);
Route::delete('/product-admin-delete/{id}', [ProductController::class, 'deleteProduct']);

Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
    return view('users');
})->name('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/orders', function () {
    return view('orders');
})->name('orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/order_detail/{id}', [OrderController::class, 'order_detail']);

Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
    return view('category');
})->name('category');

Route::middleware(['auth:sanctum', 'verified'])->get('/miscellaneous', function () {
    return view('miscellaneous');
})->name('miscellaneous');

Route::get('/category', [CategoryController::class, 'show1']);

