<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('/siswa/buat', [SiswaController::class, 'create'])->name('siswa.add');
    Route::post('/siswa/buat', [SiswaController::class, 'store'])->name('siswa.store');
