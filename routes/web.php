<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'registerPost'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
  });

Route::resource('levelAdmin/customer',\App\Http\Controllers\CustomerController::class);
Route::resource('levelAdmin/pegawai',\App\Http\Controllers\PegawaiController::class);
Route::resource('levelAdmin/kendaraan',\App\Http\Controllers\KendaraanController::class);
Route::resource('levelAdmin/keluhan',\App\Http\Controllers\KeluhanController::class);
Route::resource('levelAdmin/barang',\App\Http\Controllers\BarangController::class);
Route::resource('levelAdmin/supplier',App\Http\Controllers\SupplierController::class);

Route::resource('levelPelanggan/customer',\App\Http\Controllers\PelangganCustomerController::class);
Route::resource('levelPelanggan/keluhan',\App\Http\Controllers\PelangganKeluhanController::class);
Route::resource('levelPelanggan/barang',\App\Http\Controllers\PelangganBarangController::class);

Route::resource('levelManager/supplier',App\Http\Controllers\ManagerSupplierController::class);
Route::resource('levelManager/pegawai',\App\Http\Controllers\ManagerPegawaiController::class);
Route::resource('levelManager/kendaraan',\App\Http\Controllers\ManagerKendaraanController::class);

// Auth::routes();

// Route::middleware('auth', 'user-access:admin')->name('admin.')->group(function () {
//     Route::resource('/admin/customer', CustomerController::class);
//     Route::resource('/admin/barang', BarangController::class);
//     Route::resource('/admin/keluhan', KeluhanController::class);
//     Route::resource('/admin/kendaraan', KendaraanController::class);
//     Route::resource('/admin/pegawai', PegawaiController::class);
//     Route::resource('/admin/supplier', SupplierController::class);
//     Route::get('/admin', [HomeController::class, 'index'])->name('admin');
//     Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
//   });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
