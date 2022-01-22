<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

/* authentication routes exporting*/
Auth::routes();
/*show users views*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/referrers',[App\Http\Controllers\HomeController::class,'showReff'])->name('referrers')->middleware('auth');
Route::get('/referrers-list',[App\Http\Controllers\HomeController::class,'showList'])->name('referrers-list')->middleware('auth');

//Admin routes
Route::resource('/dashboard', AdminController::class)->middleware(['auth','adminAuth']);
