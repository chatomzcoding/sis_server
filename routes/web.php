<?php

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\AksespegawaiController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InfowebsiteController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Guru\AbsensikelasController;
use App\Http\Controllers\Guru\HomeController as GuruHomeController;
use App\Http\Controllers\Guru\SiswanilaiController;
use App\Http\Controllers\Guru\SoalController;
use App\Http\Controllers\Guru\UjianController;
use App\Http\Controllers\Guru\WalikelasController;
use App\Http\Controllers\Homepage\LandingController;
use App\Http\Controllers\Kbm\JadwalkelasController;
use App\Http\Controllers\Kbm\JadwalpelajaranController;
use App\Http\Controllers\Kbm\KbmController;
use App\Http\Controllers\Kbm\KelasController;
use App\Http\Controllers\Kbm\MatapelajaranController;
use App\Http\Controllers\Kbm\TahunajaranController;
use App\Http\Controllers\LogController as ControllersLogController;
use App\Http\Controllers\Sekolah\AksessiswaController;
use App\Http\Controllers\Sekolah\ArsippegawaiController;
use App\Http\Controllers\Sekolah\InventarisController;
use App\Http\Controllers\Sekolah\KehadiransiswaController;
use App\Http\Controllers\Sekolah\KepegawaianController;
use App\Http\Controllers\Sekolah\ListprasaranaController;
use App\Http\Controllers\Sekolah\PegawaiController;
use App\Http\Controllers\Sekolah\PrasaranaController;
use App\Http\Controllers\Sekolah\SiswaController;
use App\Http\Controllers\Sistem\UserController;
use App\Http\Controllers\Sistem\VisitorController;
use App\Http\Controllers\Siswa\HomeController;
use App\Http\Controllers\Siswa\SiswanilaiController as SiswaSiswanilaiController;
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
        Route::get('log',[LogController::class,'index']);
        Route::resource('log',ControllersLogController::class);

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
