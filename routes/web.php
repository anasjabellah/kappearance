<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController ;
use App\Http\Controllers\productController ;
use App\Http\Controllers\ContactController ;
use App\Http\Controllers\dashboardController ;
use App\Http\Controllers\SettingController ;
use App\Http\Controllers\FrontHomeController ;
use App\Http\Controllers\FrontAboutController ;
use App\Http\Controllers\FrontContactController ;
use App\Http\Controllers\OrderController ;
use App\Http\Controllers\checkoutController ;


Route::resource('/backend/Category', CategoryController::class);
Route::resource('/backend/products', productController::class);
Route::resource('/backend/Contact', ContactController::class);
Route::resource('/backend/dashboard', dashboardController::class);
Route::resource('/backend/Setting', SettingController::class);
Route::resource('/backend/order', OrderController::class);
Route::get('/backend/Category/{id}/products', [productController::class, 'getProductsCategory']);

// front end 

Route::get('/', [FrontHomeController::class, 'index' , 'GetSetting']);
Route::get('/Category/{id}/products', [FrontHomeController::class, 'getProductsCategory']);
Route::get('/product/{id}', [FrontHomeController::class, 'getProduct']);
Route::get('/about', [FrontAboutController::class, 'index']);
Route::get('/Contact', [FrontContactController::class, 'index'])->name('Front.contact');
Route::get('/checkout/product/{id}', [checkoutController::class, 'index']);
