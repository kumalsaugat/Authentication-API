<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::post('/register',[\App\Http\Controllers\UserController::class, 'register']);


Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);



//Protected Routes

Route::middleware(['auth:sanctum'])->group(function(){

    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::get('/loggeduser', [\App\Http\Controllers\UserController::class, 'logged_user']);
    Route::post('/changepassword', [\App\Http\Controllers\UserController::class, 'change_password']);
});
