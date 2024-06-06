<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
