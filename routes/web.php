<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KeluarahanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProvinsiController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/provinsi', ProvinsiController::class);
Route::resource('/kecamatan', KecamatanController::class);
Route::resource('/kelurahan', KeluarahanController::class);
Route::resource('/pegawai', PegawaiController::class);