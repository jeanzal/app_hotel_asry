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

// Authentikasi 

Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'verify'])->name('auth.verify');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

// Front Office 

Route::group(['middleware' => 'auth:FO'], function () {
    Route::prefix('FO')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\FO\DashboardController::class, 'index'])->name('FO.dashboard.index');
    });
});

// Back Office 

Route::group(['middleware' => 'auth:BO'], function () {
    Route::prefix('BO')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\BO\DashboardController::class, 'index'])->name('BO.dashboard.index');
        Route::get('/tamu', [App\Http\Controllers\BO\TamuController::class, 'index'])->name('BO.tamu.index');
        Route::get('/kamar', [App\Http\Controllers\BO\KamarController::class, 'index'])->name('BO.kamar.index');
    });
});
