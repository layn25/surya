<?php

use App\Http\Controllers\BarangController;
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

    Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
    Route::put('/pengguna', 'PenggunaController@update')->name('pengguna.update');

    Route::get('/barang', 'BarangController@index')->name('barang');

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