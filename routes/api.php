<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::post('/register',[\App\Http\Controllers\UserController::class, 'register']);


Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/send-reset-password-email', [\App\Http\Controllers\PasswordResetController::class, 'send_reset_password_email']);
Route::post('/reset-password/{token}', [\App\Http\Controllers\PasswordResetController::class, 'reset']);


//Protected Routes

Route::middleware(['auth:sanctum'])->group(function(){

    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::get('/loggeduser', [\App\Http\Controllers\UserController::class, 'logged_user']);
    Route::post('/changepassword', [\App\Http\Controllers\UserController::class, 'change_password']);
});
