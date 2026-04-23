<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/Pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/create',[PegawaiController::class, 'create']);
Route::get('/pegawai',[PegawaiController::class, 'store']);