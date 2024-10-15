<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;

// ! Beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/profil', [BerandaController::class, 'profil'])->name('profil');
Route::get('/paket', [BerandaController::class, 'paket'])->name('paket');

// ! Login and Register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login', [AuthController::class,'login'])->name('login.submit');
Route::post('/register', [AuthController::class,'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// ! Login and Register
