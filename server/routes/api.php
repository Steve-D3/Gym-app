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
Route::get('/exercises/{id}', [ExercisesController::class, 'show']);
Route::get('/exercises/search/{name}', [ExercisesController::class, 'search_by_name']);
Route::get('/exercises/equipment/{name}', [ExercisesController::class, 'search_by_equipment']);
Route::get('/exercises/muscle_group/{name}', [ExercisesController::class, 'search_by_muscle_group']);
Route::put('/exercises/{id}', [ExercisesController::class, 'update']);

