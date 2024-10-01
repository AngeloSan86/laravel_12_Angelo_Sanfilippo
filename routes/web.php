<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('product/create', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
