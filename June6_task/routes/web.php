<?php

use App\Http\Controllers\controlCustomer;
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

Route::get('/home',[controlCustomer::class,'home'])->name('home');
Route::get('/registration',[controlCustomer::class,'reg'])->name('customerReg');
Route::post('/registration',[controlCustomer::class,'regSubmit'])->name('customerReg.submit');
