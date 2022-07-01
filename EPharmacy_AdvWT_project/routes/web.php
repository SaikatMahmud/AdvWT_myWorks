<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/testall',[UserController::class,'getAll'])->name('details.all');
Route::get('/login',[LoginController::class,'login'])->name('user.login');
Route::post('/login',[LoginController::class,'verifyLogin'])->name('user.login.verify');
Route::get('/logout',[LoginController::class,'logout'])->name('user.logout');
Route::get('/registration',[CustomerController::class,'reg'])->name('cus.reg');
Route::post('/registration',[CustomerController::class,'regSubmit'])->name('cus.reg.submit');
Route::get('/search',[MedicineController::class,'searchResult'])->name('search.result');
Route::get('/details/med/id={id}',[MedicineController::class,'details'])->name('med.details');
Route::get('/med/id={id}/Order/place',[MedicineController::class,'checkStock'])->name('check.stock');
Route::post('/order/confirm',[OrderController::class,'confirmOrder'])->name('confirm.order'); //from buyNow page
Route::post('/order/placed_confirm',[OrderController::class,'confirmPage'])->name('confirm.order.page'); //order confirmation page
Route::get('/order/all/list',[OrderController::class,'showList'])->name('order.list');

Route::get('/',[CustomerController::class,'home'])->name('home');
Route::get('/aboutUs',[CustomerController::class,'about'])->name('about');

Route::get('/cart',[CustomerController::class,'cart'])->name('cus.cart');
Route::post('/add-to-cart',[MedicineController::class,'addtocart'])->name('cus.addtocart');
Route::get('/profile',[CustomerController::class,'profile'])->name('cus.profile');
Route::post('/profile',[CustomerController::class,'editProfile'])->name('cus.profile.edit');


