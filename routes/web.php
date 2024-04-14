<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpController; // Importar el controlador MpController

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/create', [UserController::class, 'create']);


Route::get('/mps/create', [MpController::class, 'create'])->name('mps.create');
Route::post('/mps', [MpController::class, 'store'])->name('mps.store');
Route::get('/mps', [MpController::class, 'index'])->name('mps.index');
Route::delete('/mps/{id}', [MpController::class, 'destroy'])->name('mps.destroy');
Route::get('/mps/{id}', [MpController::class, 'show'])->name('mps.show');
Route::get('/mps/{id}/edit', [MpController::class, 'edit'])->name('mps.edit');
Route::put('/mps/{id}', [MpController::class, 'update'])->name('mps.update');
Route::get('/mps/{id}', [MpController::class, 'show'])->name('mps.show');
