<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Authentikasi 

Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'verify'])->name('auth.verify');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

// Front Office 

Route::group(['middleware' => 'auth:FO'], function () {
    Route::prefix('FO')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\FO\DashboardController::class, 'index'])->name('FO.dashboard.index');
        Route::post('/dashboard/trsBook', [App\Http\Controllers\FO\DashboardController::class, 'trsBook'])->name('FO.dashboard.trsBook');
        Route::post('/dashboard/clsBook', [App\Http\Controllers\FO\DashboardController::class, 'clsBook'])->name('FO.dashboard.clsBook');
        Route::get('/dashboard/{id?}/bookRoom/', [App\Http\Controllers\FO\DashboardController::class, 'bookRoom'])->name('dashboard.bookRoom');
        Route::get('/dashboard/{id?}/closeBook/', [App\Http\Controllers\FO\DashboardController::class, 'closeBook'])->name('dashboard.closeBook');
    });
});

// Back Office 

Route::group(['middleware' => 'auth:BO'], function () {
    Route::prefix('BO')->group(function () {

        // Dashboard 
        Route::get('/dashboard', [App\Http\Controllers\BO\DashboardController::class, 'index'])->name('BO.dashboard.index');

        // Transaksi 
        Route::get('/transaksi', [App\Http\Controllers\BO\TransaksiController::class, 'index'])->name('BO.transaksi.index');
        Route::get('/transaksi/tambah_transaksi', [App\Http\Controllers\BO\TransaksiController::class, 'tambah_transaksi'])->name('BO.transaksi.tambah_transaksi');

        // Data Kamar 
        Route::get('/kamar', [App\Http\Controllers\BO\KamarController::class, 'index'])->name('BO.kamar.index');
        Route::post('/kamar/tambah_kamar', [App\Http\Controllers\BO\KamarController::class, 'tambah_kamar'])->name('BO.kamar.tambah_kamar');
        Route::post('/kamar/set_harga_kamar', [App\Http\Controllers\BO\KamarController::class, 'set_harga_kamar'])->name('BO.kamar.set_harga_kamar');
        Route::post('/kamar/update_kamar', [App\Http\Controllers\BO\KamarController::class, 'update_kamar'])->name('BO.kamar.update_kamar');
        Route::get('/kamar/hapus_kamar/{id}', [App\Http\Controllers\BO\KamarController::class, 'hapus_kamar'])->name('BO.kamar.hapus_kamar');
        Route::get('/kamar/edit_kamar/{id}', [App\Http\Controllers\BO\KamarController::class, 'edit_kamar'])->name('BO.kamar.edit_kamar');

    });
});
