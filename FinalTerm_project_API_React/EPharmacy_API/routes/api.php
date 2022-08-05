<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[CustomerController::class,'home'])->name('home');
Route::get('/aboutUs',[CustomerController::class,'about'])->name('about')->middleware('verify.api');
Route::get('/contactUs',[CustomerController::class,'contact'])->name('contactUs');

Route::get('/registration',[CustomerController::class,'reg'])->name('cus.reg');
Route::post('/registration',[CustomerController::class,'regSubmit'])->name('cus.reg.submit');

Route::get('/login',[LoginController::class,'login'])->name('user.login');
Route::post('/login',[LoginController::class,'verifyLogin'])->name('user.login.verify');

