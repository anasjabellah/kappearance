<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;

Route::resource('/Category', CategoryController::class);
Route::resource('/products', productController::class);