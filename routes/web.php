<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/movies', [MovieController::class, 'index']);
Route::post('/api/movies', [MovieController::class, 'store']);

Route::get('/api/characters', [CharacterController::class, 'index']);
Route::post('/api/characters', [CharacterController::class, 'store']);
