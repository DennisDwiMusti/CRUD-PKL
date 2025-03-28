<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RayonController;

Route::get('/', function () {
    return view('home');
});
Route::prefix('rayon')->name('rayon.')->group(function () {
    Route::get('/', [RayonController::class, 'index'])->name('index');
    Route::get('/tambah', [RayonController::class, 'create'])->name('create');
    Route::post('/store', [RayonController::class, 'store'])->name('store');
    Route::get('/{id}', [RayonController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [RayonController::class, 'update'])->name('update');
    Route::delete('/{id}', [RayonController::class, 'destroy'])->name('destroy');
});

Route::prefix('siswa')->name('siswa.')->group(function () {
    Route::get('/', [SiswaController::class, 'index'])->name('index');
    Route::get('/tambah', [SiswaController::class, 'create'])->name('create');
    Route::post('/store', [SiswaController::class, 'store'])->name('store');
    Route::get('/{id}', [SiswaController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/{id}', [SiswaController::class, 'destroy'])->name('destroy');
});

