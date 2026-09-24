<?php

use Illuminate\Support\Facades\Route;

// ======================================================
// PUBLIC CONTROLLERS
// ======================================================

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\JurusanController;


// ======================================================
// ADMIN CONTROLLERS
// ======================================================

use App\Http\Controllers\Admin\SiswaController as AdminSiswaController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\ProfilController as AdminProfilController;
use App\Http\Controllers\Admin\AdminGuruController;
use App\Http\Controllers\Admin\JurusanController as AdminJurusanController;


// ======================================================
// PUBLIC WEBSITE
// ======================================================

Route::get('/', [BerandaController::class, 'index'])
    ->name('beranda');

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');

Route::get('/ekskul', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler');

Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri');

Route::get('/informasi', [ArtikelController::class, 'informasi'])
    ->name('informasi');

Route::get('/kontak', [KontakController::class, 'index'])
    ->name('kontak');

// INI YANG DIBUTUHKAN FORM KONTAK
Route::post('/kontak', [KontakController::class, 'store'])
    ->name('kontak.store');

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan');


// ======================================================
// ADMIN LOGIN
// ======================================================

Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'authenticate'])
    ->name('admin.authenticate');


// ======================================================
// ADMIN PANEL
// ======================================================

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        // ==================================================
        // DASHBOARD
        // ==================================================

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');


        // ==================================================
        // PROFIL
        // ==================================================

        Route::resource(
            'profil',
            AdminProfilController::class
        );


        // ==================================================
        // SISWA
        // ==================================================

        // Route siswa bisa ditambahkan di sini nanti.


        // ==================================================
        // GURU
        // ==================================================

        Route::resource(
            'guru',
            AdminGuruController::class
        );


        // ==================================================
        // JURUSAN
        // ==================================================

        Route::resource(
            'jurusan',
            AdminJurusanController::class
        );


        // ==================================================
        // LOGOUT
        // ==================================================

        Route::post('/logout', [AdminLoginController::class, 'logout'])
            ->name('logout');
    });