<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->name('home');

Route::get('create', [RegisterController::class, 'create'])->name('user.create')->middleware('guest');
Route::post('store', [RegisterController::class, 'store'])->name('user.store')->middleware('guest');

Route::get('login', [SessionsController::class, 'gotoLogin'])->name('gotoLogin')->middleware('guest');
Route::post('loginUser', [SessionsController::class, 'login'])->name('user.login')->middleware('guest');

Route::get('menu', [ProductsController::class, 'showMenu'])->name('showMenu')->middleware('auth');
