<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // 1. Using raw SQL queries
    // $users = DB::select('select * from users');
    // dd($users);

    // 2. Query builder
    $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
    dd($users);

    // 3. Eloquent ORM
});
