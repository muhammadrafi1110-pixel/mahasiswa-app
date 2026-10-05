<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
});

Route::resource('mahasiswa', MahasiswaController::class);