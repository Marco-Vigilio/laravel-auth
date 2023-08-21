<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/guest-home', [App\Http\Controllers\Guest\GuestController::class, 'index'])->name('guest-home');
});

Route::get('/admin-home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-home');