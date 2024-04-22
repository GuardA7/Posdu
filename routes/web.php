<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AkunUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DashboardPostController;

Route::get('/', [UserController::class, 'index'])->name('auth.login');
Route::post('/', [UserController::class, 'authenticate'])->name('auth.login');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.register');

Route::get('/dashboard', [DashboardPostController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/jadwalposyandu', [JadwalController::class, 'index'])->name('jadwalposyandu')->middleware('auth');
Route::post('/jadwalposyandu', [JadwalController::class, 'store'])->name('jadwalposyandu.store')->middleware('auth');
Route::put('/jadwalposyandu/{jadwal}', [JadwalController::class, 'update'])->name('jadwalposyandu.update')->middleware('auth');
Route::delete('/jadwalposyandu/{jadwal}', [JadwalController::class, 'destroy'])->name('jadwalposyandu.destroy')->middleware('auth');

Route::get('/informasiberita', [InformasiController::class, 'index'])->name('informasiberita')->middleware('auth');
Route::get('/akunuser', [AkunUserController::class, 'index'])->name('akunuser')->middleware('auth');