<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


    Route::get('/', [SiswaController::class, 'index'])->name('index');
    Route::get('/siswa/buat', [SiswaController::class, 'create'])->name('create');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('store');
