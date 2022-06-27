<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
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

//Route::get('/',[UserController::class,'getAll'])->name('details.all');
Route::get('/',[CustomerController::class,'home'])->name('home');
Route::get('/AboutUs',[CustomerController::class,'about'])->name('about');
Route::get('/Registration',[CustomerController::class,'reg'])->name('cus.reg');
Route::get('/Login',[LoginController::class,'login'])->name('user.login');
Route::get('/Logout',[LoginController::class,'logout'])->name('user.logout');

Route::post('/Registration',[CustomerController::class,'regSubmit'])->name('cus.reg.submit');
Route::post('/Login',[LoginController::class,'verifyLogin'])->name('user.login.verify');
