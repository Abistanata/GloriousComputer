<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// route umum, bisa diakses siapa saja
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Items
Route::get('/items/laptop', fn() => view('items.laptop'))->name('items.laptop');
Route::get('/items/printer', fn() => view('items.printer'))->name('items.printer');
Route::get('/items/komputer', fn() => view('items.komputer'))->name('items.komputer');
Route::get('/items/lainnya', fn() => view('items.lainnya'))->name('items.lainnya');

// khusus admin
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')->name('admin.')
    ->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
        // (nanti: products, categories, brands, variants, testimonials, settings, dll)
    });

// khusus user login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
