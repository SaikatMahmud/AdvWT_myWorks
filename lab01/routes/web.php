<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myPageControl;

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

//Route::get('/',[myPageControl::class,'home']);
Route::get('/registration',[myPageControl::class,'signUp'])->name('reg');
Route::post('/registration',[myPageControl::class,'signUp'])->name('reg.submit');

Route::get('/student/list',[myPageControl::class,'stdlist'])->name('student.list');
Route::get('/dept/students',[myPageControl::class,'deptstd'])->name('dept.students');

