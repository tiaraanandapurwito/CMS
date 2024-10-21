<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaPartnerController;

Route::get('/admin', [AdminController::class, 'dashboard'])
    ->middleware('auth')
    ->name('admin.dashboard');


// ! Beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('company-profile.beranda');
Route::get('/profil', [BerandaController::class, 'profil'])->name('company-profile.profil');
Route::get('/paket', [BerandaController::class, 'paket'])->name('company-profile.paket');

// ! Login and Register
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// ! Login and Register

// ! Dashboard Admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login.index');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
// ! Dashboard Admin

// ! Route MediaPartner
Route::get('/admin/mediapartner', [MediaPartnerController::class, 'index'])->name('mediapartners.index');
Route::get('/admin/mediapartner/create', [MediaPartnerController::class, 'create'])->name('mediapartners.create');
Route::get('/admin/mediapartner/{mediapartner}/edit', [MediaPartnerController::class, 'edit'])->name('mediapartners.edit');
Route::put('/admin/mediapartner/{mediapartner}', [MediaPartnerController::class, 'update'])->name('mediapartners.update');
Route::post('/admin/mediapartner/create', [MediaPartnerController::class, 'store'])->name('mediapartners.store');
Route::delete('/admin/mediapartner/{mediapartner}/delete', [MediaPartnerController::class, 'destroy'])->name('mediapartners.delete');
// ! Route MediaPartner
