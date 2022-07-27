<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;
use App\Http\Controllers\ContactController ;
use App\Http\Controllers\dashboardController ;
use App\Http\Controllers\SettingController ;
use App\Http\Controllers\FrontHomeController ;


Route::resource('/backend/Category', CategoryController::class);
Route::resource('/backend/products', productController::class);
Route::resource('/backend/Contact', ContactController::class);
Route::resource('/backend/dashboard', dashboardController::class);
Route::resource('/backend/Setting', SettingController::class);
Route::get('/backend/Category/{id}/products', [productController::class, 'getProductsCategory']);

// front end 

Route::get('/', [FrontHomeController::class, 'index' , 'GetSetting']);
Route::get('/Category/{id}/products', [FrontHomeController::class, 'getProductsCategory']);
Route::get('/product/{id}', [FrontHomeController::class, 'getProduct']);
