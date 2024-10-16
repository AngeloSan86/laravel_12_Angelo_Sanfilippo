<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'home'])->name('home');



Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/product/index', [ProductController::class, 'index'])->name('products.index');


//Article controller
Route::get('article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');