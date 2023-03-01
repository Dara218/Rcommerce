<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->name('home');

Route::get('register', [RegisterController::class, 'gotoRegister'])->name('gotoRegister');
Route::post('create', [RegisterController::class, 'create'])->name('createUser');

Route::get('login', [SessionsController::class, 'gotoLogin'])->name('gotoLogin');
