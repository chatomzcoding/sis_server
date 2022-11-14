<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\MesinController;
use App\Http\Controllers\Admin\WsController;
use App\Http\Controllers\Homepage\LandingController;
use App\Http\Controllers\Sistem\UserController;
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

// HOMEPAGE
Route::get('/',[LandingController::class,'index']);
/*
-------------------------------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    // Umum
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

    // Route Admin
    Route::middleware(['admin'])->group(function () {
        // simpan route admin dibawah ini

        // ABSENSI
        Route::get('admin/absensi',[AbsensiController::class,'index']);
        Route::get('admin/absensi/{sesi}',[AbsensiController::class,'show']);
        Route::get('datalog',[MesinController::class,'index']);
        Route::resource('log',LogController::class);

        // WebService
        Route::get('kirimdata/{sesi}',[WsController::class,'kirimdata']);

    });

    Route::resource('user', UserController::class);
});

// --------------------------------------------------------------------------------------------
// PENGUJIAN DLL
// --------------------------------------------------------------------------------------------
// Cetak PDF dengan dompdf packgake
Route::get('/cetak/lihat','App\Http\Controllers\Pengujian\PrintpdfController@get');
Route::get('/cetak/download','App\Http\Controllers\Pengujian\PrintpdfController@out');
// --------------------------------------------------------------------------------------------
