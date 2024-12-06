<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    $nav = 'Dashboard';
    return view('dashboard', compact('nav'));
})->name('dashboard');

// Dosen Routes
Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/dosens/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/dosens/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('/dosens/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/dosens/{dosen}', [DosenController::class, 'destroy'])->name('dosens.destroy');

// Mahasiswa Routes
Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');