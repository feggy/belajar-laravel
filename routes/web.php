<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracuricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});



Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/student/{id}', [StudentController::class, 'show']);
});


Route::prefix('class')->group(function(){
    Route::get('/', [ClassController::class, 'index']);
    Route::get('/class/{id}', [ClassController::class, 'show']);
});

Route::get('/extracuricular', [ExtracuricularController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);
