<?php
use App\Http\Controllers\Home3controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [Home3controller::class,'index']);

Route::prefix('category')->group(function() {
    Route::get('/{id}', [ProductController::class,'product']); 

Route::get('/news/{id?}', [NewsController::class,'news']);
});
