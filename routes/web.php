<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
// HEAD
Route::get('ketua/', function () {
    return view('ketua');
});
Route::get('anggota/', function () {
    return view('anggota');
// github/nisa
});
Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
