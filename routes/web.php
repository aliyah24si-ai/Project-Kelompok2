<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LembagadesaController;
use App\Http\Controllers\jabatanController;
use \App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('lembagadesa', LembagadesaController::class);



Route::get('/ketua', function () {
    return view('ketua');
});
Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('dashboard', [DashboardController::class, 'index'])
      ->name('dashboard');

<<<<<<< HEAD
Route::resource('jabatan', jabatanController::class);


Route::resource('products', ProductController::class);
=======
//Route::resource('jabatan', JabatanController::class);
Route::resource('products', \App\Http\Controllers\ProductController::class);
>>>>>>> 8364eee21da8a0fc2cb611f42dd0586210517965
