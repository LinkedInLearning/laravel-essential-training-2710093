<?php

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Get the student model where email is john@example.com
    $student = Student::where('email', 'john@example.com')->first();

    // Update the 'status' column with the value 'active'
    $student->status = 'active';

    // Save the model
    $student->save();

    // Dump the result
    dd($student);
});
