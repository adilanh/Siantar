<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ArchiveSearchController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\IncomingLetterController;
use App\Http\Controllers\OutgoingLetterController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/surat-masuk', [IncomingLetterController::class, 'index'])->name('surat-masuk.index');
    Route::post('/surat-masuk', [IncomingLetterController::class, 'store'])->name('surat-masuk.store');
    Route::get('/tambah-surat-masuk', [IncomingLetterController::class, 'create'])->name('tambah-surat-masuk');
    Route::get('/detail-surat-masuk/{incomingLetter}', [IncomingLetterController::class, 'show'])->name('detail-surat-masuk');
    Route::get('/surat-masuk/{incomingLetter}/download', [IncomingLetterController::class, 'download'])->name('surat-masuk.download');
    Route::patch('/surat-masuk/{incomingLetter}/instruksi', [IncomingLetterController::class, 'updateInstruction'])->name('surat-masuk.instruction');
    Route::patch('/surat-masuk/{incomingLetter}/arahan-final', [IncomingLetterController::class, 'updateFinalDirection'])->name('surat-masuk.final-direction');

    Route::get('/surat-keluar', [OutgoingLetterController::class, 'index'])->name('surat-keluar.index');
    Route::post('/surat-keluar', [OutgoingLetterController::class, 'store'])->name('surat-keluar.store');
    Route::get('/tambah-surat-keluar', [OutgoingLetterController::class, 'create'])->name('tambah-surat-keluar');
    Route::get('/detail-surat-keluar/{outgoingLetter}', [OutgoingLetterController::class, 'show'])->name('detail-surat-keluar');
    Route::get('/surat-keluar/{outgoingLetter}/download', [OutgoingLetterController::class, 'download'])->name('surat-keluar.download');

    Route::get('/tambah-surat', function () {
        if (!request()->user()->hasAnyRole(['sekretariat', 'admin'])) {
            abort(403);
        }

        return view('tambah-surat');
    })->name('tambah-surat');

    Route::get('/cari-arsip', [ArchiveSearchController::class, 'index'])->name('cari-arsip');

    Route::get('/notifikasi', function () {
        return view('surat-masuk.notifikasi');
    })->name('notifikasi.index');

    Route::get('/pengaturan', function () {
        return view('surat-masuk.pengaturan');
    })->name('pengaturan.index');

    Route::resource('archives', ArchiveController::class);

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    // Google Drive OAuth Routes (Admin Only)
    Route::get('/google/auth', [GoogleAuthController::class, 'redirect'])->name('google.auth');
    Route::get('/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');
    Route::get('/google/test', [GoogleAuthController::class, 'test'])->name('google.test');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
