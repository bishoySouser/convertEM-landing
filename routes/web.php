<?php

use App\Http\Controllers\Landing\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coming-soon', function () {
    return view('soon');
});

Route::post('/landing/notify', [MainController::class, 'store'])->name('landing.notify');
