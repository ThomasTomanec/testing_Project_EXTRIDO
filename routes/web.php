<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/export', [DashboardController::class, 'export'])->name('dashboard.export');

Route::get('/produkty', [ProductController::class, 'index'])->name('produkty.index');
Route::post('/produkty', [ProductController::class, 'store'])->name('produkty.create');
Route::delete('/produkty/{id}', [ProductController::class, 'destroy'])->name('produkty.destroy');
Route::get('/produkty/{id}/edit', [ProductController::class, 'edit'])->name('produkty.edit');
Route::patch('/produkty/{id}', [ProductController::class, 'update'])->name('produkty.update'); 



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
