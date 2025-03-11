<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoapController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/catalog', [SoapController::class, 'index'])->name('catalog');

Route::get('/product/{id}', [SoapController::class, 'show'])->name('product.show');
