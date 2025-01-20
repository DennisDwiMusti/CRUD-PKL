<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


    Route::get('/', [SiswaController::class, 'index'])->name('index');
    Route::get('/siswa/buat', [SiswaController::class, 'create'])->name('create');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('store');
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::patch('/siswa/update/{id}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

