<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name("beranda");

Route::resource('/barang', \App\Http\Controllers\barangController::class)->middleware(['admin', 'auth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'index'])->name("profile.index");
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



route::get('admin/dashboard',[HomeController::class,'index'])->middleware(["auth", "admin"]);

// Bagian Halaman Detail Barang
route::get('/{namaBarang}', [barangController::class, 'getBarang'])->middleware(['auth']);
route::get('/create', [barangController::class, 'create'])->middleware(['auth', 'admin']);