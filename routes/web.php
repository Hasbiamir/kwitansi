<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KwitansiController;

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Kwitansi Routes
Route::middleware(['auth'])->group(function () {
    Route::resource('kwitansi', KwitansiController::class)->except(['create', 'store']);
    Route::get('/kwitansi.create', [KwitansiController::class, 'create'])->name('kwitansi.create');
    Route::post('/kwitansi', [KwitansiController::class, 'store'])->name('kwitansi.store');
});

// Main Page Route
Route::get('/', function () {
    return view('welcome'); // Pastikan 'welcome' sesuai dengan nama file blade untuk halaman utama Anda
});
