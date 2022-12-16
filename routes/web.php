<?php

use Illuminate\Support\Facades\Route;

use App\Events\PaidEvent;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Models\ProductModel;
use App\Models\User;
use App\Notifications\OrderNotification;


Route::get('/success', [OrderController::class, 'show_paid']);
Route::get('/success1', [OrderController::class, 'show1']);

Route::get('/delivery', function(){
    return view('delivery');
});
   

Route::get('/show', [CategoryController::class, 'show']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class, 'show1']);
Route::post('/category', [CategoryController::class, 'show']);


Route::get('/single_product/{id}', [ProductController::class, 'display']);

Route::post('/addToCart/{id}', [ProductController::class, 'addToCart']);
Route::get('/addToCart', function(){
 return view('addToCart');
});

Route::get('/order', function(){
    return view('order');
})->middleware('auth');
Route::get('/payment1', [ShowController::class, 'payment']);
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
    return view('dashboard.dashboard');
})->name('dashboard.dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/banner', function () {
    return view('dashboard.banner');
})->name('dashboard.banner');

Route::middleware(['auth:sanctum', 'verified'])->post('/banner', [OrderController::class, 'banner_edit']);

Route::middleware(['auth:sanctum', 'verified'])->get('/product-admin', function () {
    return view('dashboard.product-admin');
})->name('dashboard.product-admin');

Route::get('/product-admin', [ProductController::class, 'show']);
Route::post('/product-admin', [ProductController::class, 'insert']);

Route::get('/product-admin-edit/{id}', [ProductController::class, 'editProduct']);
Route::post('/product-admin-edit/{id}', [ProductController::class, 'updateProduct']);

Route::get('/edit-product/{id}', [ProductController::class, 'updateReal']);
Route::put('/update-product/{id}', [ProductController::class, 'change']);
// Route::put('/orders/{id}', [ProductController::class, 'update_status']);



Route::get('/product-admin-delete/{id}', [ProductController::class, 'deleteView']);
Route::delete('/product-admin-delete/{id}', [ProductController::class, 'deleteProduct']);

Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
    return view('dashboard.users');
})->name('dashboard.users');

Route::middleware(['auth:sanctum', 'verified'])->put('/users/{id}', [ProductController::class, 'upgrade']);

Route::middleware(['auth:sanctum', 'verified'])->get('/orders', function () {
    return view('dashboard.orders');
})->name('dashboard.orders');

Route::middleware(['auth:sanctum', 'verified'])->put('/orders/{id}', [ProductController::class, 'update_status']);

Route::middleware(['auth:sanctum', 'verified'])->get('/order_detail/{id}', [OrderController::class, 'order_detail']);



Route::delete('/delete-category/{id}', [ProductController::class, 'delete_category']);

Route::middleware(['auth:sanctum', 'verified'])->get('/category', function () {
    return view('dashboard.category');
})->name('dashboard.category');

Route::get('/edit-category/{id}', [ProductController::class, 'editCategory']);

Route::put('/edit-category/{id}', [ProductController::class, 'updateCategory']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/miscellaneous', function () {
//     return view('miscellaneous');
// })->name('miscellaneous');

Route::get('/category', [CategoryController::class, 'show1']);

//product route
Route::get('/accessory', function () {
    return view('product.accessory');
});

Route::get('/computer', function () {
    return view('product.computer');
});

Route::get('/macbook', function () {
    return view('product.macbook');
});

Route::get('/network-and-storage', function () {
    return view('product.network-and-storage');
});

Route::get('/phone', function () {
    return view('product.phone');
});

Route::get('/new_arrival', function () {
    return view('new_arrival');
});

Route::get('/printer', function () {
    return view('product.printer');
});

Route::get('/server', function () {
    return view('product.server');
});

Route::get('/software', function () {
    return view('product.software');
});

Route::get('/webcam', function () {
    return view('product.webcam');
});

Route::get('/desktop', function () {
    return view('product.desktop');
});


Route::get('/toner-and-ink-catridges', function () {
    return view('product.toner-and-ink-catridges');
});

Route::get('/pc-gaming', function () {
    return view('product.pc-gaming');
});

Route::get('/server-option', function () {
    return view('product.server-option');
});

Route::get('/lifestyle', function () {
    return view('product.lifestyle');
});

Route::get('/games-and-console', function () {
    return view('product.games-and-console');
});
