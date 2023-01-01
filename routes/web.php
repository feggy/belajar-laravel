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
    Route::get('/details/{id}', [StudentController::class, 'show']);
    Route::get('/form-add', [StudentController::class, 'create']);
    Route::post('/add-new', [StudentController::class, 'store']);
    Route::get('/form-edit/{id}', [StudentController::class, 'edit']);
    Route::put('/form-edit/update/{id}', [StudentController::class, 'update']);
});


Route::prefix('class')->group(function () {
    Route::get('/', [ClassController::class, 'index']);
    Route::get('/{id}', [ClassController::class, 'show']);
});

Route::prefix('extracuricular')->group(function () {
    Route::get('/', [ExtracuricularController::class, 'index']);
    Route::get('/{id}', [ExtracuricularController::class, 'show']);
});


Route::prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index']);
    Route::get('/{id}', [TeacherController::class, 'show']);
});
