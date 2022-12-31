<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracuricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
Route::get('/extracuricular', [ExtracuricularController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);
