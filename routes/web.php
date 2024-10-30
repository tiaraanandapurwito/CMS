<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeskripsiProfilController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MediaPartnerController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimoniController;

Route::get('/admin', [AdminController::class, 'dashboard'])
    ->middleware('auth')
    ->name('admin.dashboard');


// ! Beranda
Route::get('/', [BerandaController::class, 'beranda'])->name('company-profile.beranda');
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
Route::patch('/admin/mediapartner/{mediapartner}/toggle-status', [MediaPartnerController::class, 'toggleStatus'])
    ->name('mediapartners.toggle-status');
Route::get('/admin/mediapartner/create', [MediaPartnerController::class, 'create'])->name('mediapartners.create');
Route::get('/admin/mediapartner/{mediapartner}/edit', [MediaPartnerController::class, 'edit'])->name('mediapartners.edit');
Route::put('/admin/mediapartner/{mediapartner}', [MediaPartnerController::class, 'update'])->name('mediapartners.update');
Route::post('/admin/mediapartner/create', [MediaPartnerController::class, 'store'])->name('mediapartners.store');
Route::delete('/admin/mediapartner/{mediapartner}/delete', [MediaPartnerController::class, 'destroy'])->name('mediapartners.delete');
// ! Route MediaPartner

// ! Route DeskripsiProfil Perusahaan
Route::get('/admin/profilperusahaan', [DeskripsiProfilController::class, 'index'])->name('deskripsi profil.deskripsi');
Route::get('/admin/profilperusahaan/create', [DeskripsiProfilController::class, 'create'])->name('deskripsi profil.create');
Route::post('/admin/profilperusahaan/create', [DeskripsiProfilController::class, 'store'])->name('deskripsi profil.store');
Route::get('/admin/profilperusahaan/{id}/edit', [DeskripsiProfilController::class, 'edit'])->name('deskripsi profil.edit');
Route::put('admin/profilperusahaan/{id}', [DeskripsiProfilController::class, 'update'])->name('deskripsi profil.update');
Route::post('/admin/profilperusahaan/delete', [DeskripsiProfilController::class, 'destroy'])->name('deskripsi profil.delete');
// ! Route DeskripsiProfil Perusahaan

// ! Route Paket
Route::get('admin/paket', [PaketController::class, 'index'])->name('paket.index');
Route::get('/admin/paket/create', [PaketController::class, 'create'])->name('paket.create');
Route::post('/admin/paket/create', [PaketController::class, 'store'])->name('paket.store');
Route::get('/admin/paket/{id}/edit', [PaketController::class, 'edit'])->name('paket.edit');
Route::put('admin/paket/{id}', [PaketController::class, 'update'])->name('paket.update');
Route::delete('/admin/paket/{id}/delete', [PaketController::class, 'destroy'])->name('paket.delete');
// !Route Paket

// !Route Testimoni
Route::get('admin/testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
Route::get('/admin/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
Route::post('/admin/testimoni/create/dd', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/admin/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
Route::put('admin/testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
Route::delete('/admin/testimoni/{id}/delete', [TestimoniController::class, 'destroy'])->name('testimoni.delete');
// !Route Testimoni

Route::get('admin/locations', [LocationController::class, 'index'])->name('maps.index');
Route::get('/admin/locations/create', [LocationController::class, 'create'])->name('maps.create');
Route::post('/admin/locations/create/dd', [LocationController::class, 'store'])->name('maps.store');
Route::get('/admin/locations/{id}/edit', [LocationController::class, 'edit'])->name('maps.edit');
Route::put('/admin/locations/{id}', [LocationController::class, 'update'])->name('maps.update');
Route::delete('/admin/locations/{id}/delete', [LocationController::class, 'destroy'])->name('maps.destroy');
