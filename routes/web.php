<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

    Route::get('/materi/{materi}/{sub}', [MateriController::class, 'show'])
        ->name('materi.show');

    Route::post('/materi/{materi}/nilai', [MateriController::class, 'simpanNilai'])
        ->name('materi.nilai');
});


require __DIR__.'/auth.php';
