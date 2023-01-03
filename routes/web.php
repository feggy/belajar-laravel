<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracuricularController;

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->middleware('auth');
    Route::get('/details/{id}', [StudentController::class, 'show']);
    Route::get('/form-add', [StudentController::class, 'create']);
    Route::post('/add-new', [StudentController::class, 'store']);
    Route::get('/form-edit/{id}', [StudentController::class, 'edit']);
    Route::put('/form-edit/update/{id}', [StudentController::class, 'update']);
    Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
    Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
    Route::get('/student-deleted', [StudentController::class, 'deletedStudent']);
    Route::get('/student/{id}/restore', [StudentController::class, 'restore']);
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
