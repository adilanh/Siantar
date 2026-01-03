<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/manfaat', function () {
    return view('manfaat');
})->name('manfaat');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/surat-masuk', function () {
    return view('surat-masuk.index');
})->middleware(['auth', 'verified'])->name('surat-masuk.index');

Route::get('/surat-keluar', function () {
    return view('surat-keluar.index');
})->middleware(['auth', 'verified'])->name('surat-keluar.index');

Route::get('/tambah-surat', function () {
    return view('tambah-surat');
})->middleware(['auth', 'verified'])->name('tambah-surat');

Route::get('/tambah-surat-masuk', function () {
    return view('tambah-surat-masuk');
})->middleware(['auth', 'verified'])->name('tambah-surat-masuk');

Route::get('/tambah-surat-keluar', function () {
    return view('tambah-surat-keluar');
})->middleware(['auth', 'verified'])->name('tambah-surat-keluar');

Route::get('/cari-arsip', function () {
    return view('cari-arsip');
})->middleware(['auth', 'verified'])->name('cari-arsip');

Route::get('/detail-surat-masuk', function () {
    return view('detail-surat-masuk');
})->middleware(['auth', 'verified'])->name('detail-surat-masuk');

Route::get('/detail-surat-keluar', function () {
    return view('detail-surat-keluar');
})->middleware(['auth', 'verified'])->name('detail-surat-keluar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
