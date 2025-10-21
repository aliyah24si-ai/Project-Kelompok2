<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
<<<<<<< HEAD
use App\Http\Controllers\LembagadesaController;

=======
>>>>>>> 576cc6e6ce75a662c8d57620d9c9668531ef41e6

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

Route::resource('lembagadesa', LembagadesaController::class);


=======
Route::get('/ketua', function () {
    return view('ketua');
});
Route::get('/anggota', function () {
    return view('anggota');
});

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
>>>>>>> 576cc6e6ce75a662c8d57620d9c9668531ef41e6
