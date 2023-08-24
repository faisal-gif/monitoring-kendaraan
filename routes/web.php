<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PersetujuanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});


Auth::routes();

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'admin'])->name('dashboard');
    Route::resource('kendaraan', KendaraanController::class);
    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
    Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');
    Route::get('/pemesanan/excel',[PemesananController::class, 'excel'])->name('pemesanan.excel');
});
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/persetujuan', [PersetujuanController::class, 'index'])->name('persetujuan.index');
    Route::get('/persetujuan/{id}/{status}', [PersetujuanController::class, 'status'])->name('persetujuan.proses');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
