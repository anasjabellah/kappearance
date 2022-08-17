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
use App\Http\Controllers\CustomAuthController ;


Route::resource('/backend/Category', CategoryController::class);
Route::resource('/backend/products', productController::class);
Route::resource('/backend/Contact', ContactController::class);
Route::resource('/backend/dashboard', dashboardController::class);
Route::resource('/backend/Setting', SettingController::class);
Route::resource('/backend/order', OrderController::class);
Route::get('/backend/Category/{id}/products', [productController::class, 'getProductsCategory']);




// front end 
Route::get('/', [FrontHomeController::class, 'index' , 'GetSetting'])->name('front.index');
Route::get('/Category/{id}/products', [FrontHomeController::class, 'getProductsCategory']);
Route::get('/product/{id}', [FrontHomeController::class, 'getProduct']);
Route::get('/about', [FrontAboutController::class, 'index']);
Route::get('/Contact', [FrontContactController::class, 'index'])->name('Front.contact');
Route::get('/checkout/product/{id}', [checkoutController::class, 'index']);
Route::get('/cart', [OrderController::class, 'cart']);
Route::get('add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add.to.cart');
Route::delete('remove-from-cart', [OrderController::class, 'remove'])->name('remove.from.cart');





Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');