<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\LembagadesaController;
use App\Http\Controllers\jabatanController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

Route::resource('lembagadesa', LembagadesaController::class);



Route::get('/ketua', function () {
    return view('ketua');
});
Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

Route::resource('jabatan', jabatanController::class);
