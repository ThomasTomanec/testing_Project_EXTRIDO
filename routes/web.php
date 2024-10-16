<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/produkty', [ProduktController::class, 'index'])->name('produkty.index');
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
