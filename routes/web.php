<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;
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


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::put('update', [ProfileController::class, 'update'])->name('profile.update');
    });
    Route::prefix('/pengguna')->middleware('is.admin')->group(function () {
        Route::get('/', [PenggunaController::class, 'index'])->name('pengguna');
        Route::post('/create', [PenggunaController::class, 'create'])->name('pengguna.create');
        Route::put('update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
        Route::delete('delete/{id}', [PenggunaController::class, 'delete'])->name('pengguna.delete');
    });
    Route::prefix('/barang')->group(function () {
        Route::get('/', [BarangController::class, 'index'])->name('barang');
        Route::post('/create', [BarangController::class, 'create'])->name('barang.create');
        Route::put('update/{id}', [BarangController::class, 'update'])->name('barang.update');
        Route::delete('delete/{id}', [BarangController::class, 'delete'])->name('barang.delete');
    });

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});