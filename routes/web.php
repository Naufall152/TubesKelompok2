<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonasiTunaiController;
use App\Http\Controllers\DonasiMakananController;
use App\Http\Controllers\ListDonasiController;
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
    return view('coba');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});

Route::get('/donasi', [DonationController::class, 'index'])->name('donasi');

Route::post('/donasi/submit', [DonationController::class, 'submit'])->name('donasi.submit');

Route::get('/donasi/makanan', function () {
    return view('donasi.makanan'); // Pastikan ada file Blade bernama makanan.blade.php
})->name('donasi.makanan');

// Route untuk halaman Donasi Tunai
Route::get('/donasi/tunai', function () {
    return view('donasi.tunai'); // Pastikan ada file Blade bernama tunai.blade.php
})->name('donasi.tunai');

Route::post('/donasi-tunai', [DonasiTunaiController::class, 'store'])->name('donasi.tunai.store');
Route::post('/donasi-makanan', [DonasiMakananController::class, 'store'])->name('donasi.makanan.store');
Route::get('/list-donasi', [ListDonasiController::class, 'index'])->name('list.donasi');
