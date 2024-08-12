<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Define a route for the root URL that maps to the index method of TaskController
Route::get('/', [TaskController::class, 'index']);

Route::get('/task/create',[TaskController::class,'create']);

Route::post('/task',[TaskController::class,'store']);

Route::patch('/task/{id}',[TaskController::class,'update']);

Route::delete('/task/{id}',[TaskController::class,'delete']);