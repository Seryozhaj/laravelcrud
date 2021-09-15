<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VerifiedController;

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


Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home',  [HomeController::class, 'index'])->name('home');
Route::get('/verified',[VerifiedController::class, 'index'])->name('verified');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('products', ProductController::class);
    Route::resource('tags', TagController::class);
});