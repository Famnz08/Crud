<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/pengguna', [PenggunaController::class,'index']);
Route::get('/tambahpengguna', [PenggunaController::class,'create']);
Route::post('/storepengguna', [PenggunaController::class,'store']);
Route::get('/editpengguna/{id}',[PenggunaController::class,'edit']);
Route::put('/update/{id}', [PenggunaController::class,'update']);
Route::get('/destroypengguna/{id}', [PenggunaController::class,'destroy']);
//
Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/tambah', [TransaksiController::class,'create']);
Route::post('/store', [TransaksiController::class,'store']);
Route::get('/edit/{id}', [TransaksiController::class,'edit']);
Route::put('/update/{id}', [TransaksiController::class,'update']);
Route::get('/destroy/{id}', [TransaksiController::class,'destroy']);