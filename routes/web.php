<?php

use App\Http\Controllers\GreetingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
