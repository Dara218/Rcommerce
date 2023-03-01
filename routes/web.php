<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
})->name('home');

Route::get('register', [RegisterController::class, 'gotoRegister'])->name('gotoRegister');
