<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GestioController;
use App\Http\Controllers\GestioContingutsController;



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/informacion', [InformacionController::class, 'index'])->name('informacion.index');
    Route::get('/gestio', [GestioController::class, 'index'])->name('gestio.index');
    Route::get('/continguts', [GestioContingutsController::class, 'index'])->name('continguts.index');
    Route::get('/componente', [InformacionController::class, 'index'])->name('componente.index');
    Route::resource('users', UserController::class);
});

require __DIR__ . '/auth.php';

