<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ... other routes

Route::get('/tasks', [TaskController::class, 'index']);
