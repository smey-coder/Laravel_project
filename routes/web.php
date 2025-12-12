<?php

use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function (): View{
    return view('hi');
});

// Route::get('/sum/{a}/{b}', function($a, $b): View{
//     $total = $a + $b;
//     return view('sum', compact('total'));
// });

Route::get('sum/{a}/{b}', [SumController::class, 'calc']);
Route::get('multi/{a}/{b}', [SumController::class, 'multi']);

Route::get('/students', [StudentController::class, 'index']);