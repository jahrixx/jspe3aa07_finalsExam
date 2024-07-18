<?php

use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\ActorController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/register', 'API\RegisterController@register');
    Route::post('/login', 'API\LoginController@login');

    Route::apiResource('movies', MovieController::class);
    Route::get('movies/{movie}', [MovieController::class, 'getMovieById']);
    Route::get('movies/{director}', [DirectorController::class, 'getMovieByDirectorId']);
    Route::get('movies/{actor}', [ActorController::class, 'getMovieByActorId']);
    Route::get('movies/{genre}', [ActorController::class, 'getMovieByGenreId']);
    Route::get('movies/{rating}', [ActorController::class, 'getMovieByRatingId']);
});