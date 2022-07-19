<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;
use App\Http\Controllers\ContactController ;

Route::resource('/Category', CategoryController::class);
Route::resource('/products', productController::class);
Route::resource('/Contact', ContactController::class);