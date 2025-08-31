<?php

use Illuminate\Support\Facades\Route;

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