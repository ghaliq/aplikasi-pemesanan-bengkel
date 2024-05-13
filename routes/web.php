<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::resource('/customer',\App\Http\Controllers\CustomerController::class);
Route::resource('/pegawai',\App\Http\Controllers\PegawaiController::class);
Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
