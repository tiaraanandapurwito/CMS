<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// ! Login and Register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');
Route::post('/register', [AuthController::class,'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// ! Login and Register
