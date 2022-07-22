<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;
use App\Http\Controllers\ContactController ;
<<<<<<< HEAD
use App\Http\Controllers\dashboardController ;
=======
use App\Http\Controllers\SettingController ;
>>>>>>> main

Route::resource('/Category', CategoryController::class);
Route::resource('/products', productController::class);
Route::resource('/Contact', ContactController::class);
<<<<<<< HEAD
Route::resource('/dashboard', dashboardController::class);
Route::get('/Category/{id}/products', [productController::class, 'getProductsCategory']);
=======
Route::resource('/Setting', SettingController::class);
>>>>>>> main
