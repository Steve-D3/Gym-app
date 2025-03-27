<?php

use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\TypeOfExerciseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// type_of_exercise routes
Route::get('/type_of_exercise', [TypeOfExerciseController::class, 'index']);
Route::get('/type_of_exercise/{exercise_id}', [TypeOfExerciseController::class, 'show']);
Route::post('/type_of_exercise', [TypeOfExerciseController::class, 'store']);
Route::put('/type_of_exercise/{id}', [TypeOfExerciseController::class, 'update']);
Route::delete('/type_of_exercise/{id}', [TypeOfExerciseController::class, 'destroy']);

// exercises routes
Route::get('/exercises', [ExercisesController::class, 'index']);
