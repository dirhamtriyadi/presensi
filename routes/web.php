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

Route::get('/pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pengguna/list-data', [App\Http\Controllers\PenggunaController::class, 'lihatData']);
Route::get('/pengguna/ambil-data/{nip}', [App\Http\Controllers\PenggunaController::class, 'ambilData']);
Route::post('/pengguna/simpan-data', [App\Http\Controllers\PenggunaController::class, 'simpanData']);
Route::delete('/pengguna/hapus-data/{nip}', [App\Http\Controllers\PenggunaController::class, 'hapusData']);

Route::get('/petakehadiran', [App\Http\Controllers\PetaKehadiranController::class, 'lihatData']);
Route::post('/petakehadiran', [App\Http\Controllers\PetaKehadiranController::class, 'simpanData']);
Route::get('/petakehadiran/{id}', [App\Http\Controllers\PetaKehadiranController::class, 'ambilData']);
Route::delete('/petakehadiran/{id}', [App\Http\Controllers\PetaKehadiranController::class, 'hapusData']);

Route::get('/presensiharian', [App\Http\Controllers\PresensiHarianController::class, 'lihatData']);
Route::post('/presensiharian', [App\Http\Controllers\PresensiHarianController::class, 'simpanData']);
Route::get('/presensiharian/{id}', [App\Http\Controllers\PresensiHarianController::class, 'ambilData']);
Route::delete('/presensiharian/{id}', [App\Http\Controllers\PresensiHarianController::class, 'hapusData']);
