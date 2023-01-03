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

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    Route::prefix('students')->group(function () {
        Route::get('/', 'index');
        Route::get('/details/{id}', 'show');
        Route::get('/form-add', 'create');
        Route::post('/add-new', 'store');
        Route::get('/form-edit/{id}', 'edit');
        Route::put('/form-edit/update/{id}', 'update');
        Route::get('/student-delete/{id}', 'delete');
        Route::delete('/student-destroy/{id}', 'destroy');
        Route::get('/student-deleted', 'deletedStudent');
        Route::get('/student/{id}/restore', 'restore');
    });
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
