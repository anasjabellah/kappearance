<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;
use App\Http\Controllers\ContactController ;
use App\Http\Controllers\dashboardController ;
use App\Http\Controllers\SettingController ;


Route::resource('/backend/Category', CategoryController::class);
Route::resource('/backend/products', productController::class);
Route::resource('/backend/Contact', ContactController::class);
Route::resource('/backend/dashboard', dashboardController::class);
Route::get('/backend/Category/{id}/products', [productController::class, 'getProductsCategory']);
Route::resource('/backend/Setting', SettingController::class);
