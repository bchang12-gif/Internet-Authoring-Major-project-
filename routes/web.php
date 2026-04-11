<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('Directory');
});

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/admissions', function () {
    return view('Addmissions');
});

Route::get('/social', function () {
    return view('Social');
});