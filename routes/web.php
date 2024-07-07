<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomePageContrroler;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index/index');
});

Route::get('/daftar-kursus', [HomePageContrroler::class, 'daftarKursus'])->name('daftarKursus');

Route::get('/login', [UserController::class, 'viewLogin'])->middleware('guest')->name('login');
Route::get('/register', [UserController::class, 'viewRegister'])->middleware('guest')->name('register');
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
})->name('dashboard')->middleware('auth');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
    // Rute admin lainnya...
    Route::resource('/admin/kursus', KursusController::class);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index1'])->name('user.dashboard');
    // Rute user lainnya...
});
