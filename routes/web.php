<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\StudentController;
// Route::get('/students', [StudentController::class, 'index'])->name('students.index');
// Route::get('/students/create/', [StudentController::class, 'create'])->name('students.create');
// Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Route::get('/students/', [StudentController::class, 'edit'])->name('students.edit');
// Route::get('/students/', [StudentController::class, 'update'])->name('students.update');
// Route::get('/students/', [StudentController::class, 'update'])->name('students.update');
Route::resource('/students', StudentController::class);