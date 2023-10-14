<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::post('/register',[\App\Http\Controllers\UserController::class, 'register']);


Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);



//Protected Routes

Route::middleware(['auth:sanctum'])->group(function(){

    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

});
