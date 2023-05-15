<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barangs.index');
    Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksis.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
