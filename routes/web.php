<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', MovieController::class);
Route::get('/index', [MovieController::class, 'index'])->name('index');