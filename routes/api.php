<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Public Routes
// Route::post('/register',[\App\Http\Controllers\UserController::class, 'register']);

Route::post('/register', [UserController::class, 'register']);

//Protected Routes
