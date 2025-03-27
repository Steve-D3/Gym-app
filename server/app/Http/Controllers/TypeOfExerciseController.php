<?php

namespace App\Http\Controllers;

use App\Models\Type_of_exercise;
use Illuminate\Http\Request;

class TypeOfExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Type_of_exercise::select('id', 'name')
        ->orderBy('id', 'asc')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:type_of_exercises,name',
        ]);

        // Create a new record
        $typeOfExercise = Type_of_exercise::create([
            'name' => $validatedData['name'],
        ]);

        // Return the created record
        return response()->json([
            'id' => $typeOfExercise->id,
            'name' => $typeOfExercise->name,
        ], 201); // 201 status code for "Created"
    }

    /**
     * Display the specified resource.
     */
    public function show(Type_of_exercise $exercise_id)
    {
        return response()->json([
            'id' => $exercise_id->id,
            'name' => $exercise_id->name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_of_exercise $type_of_exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type_of_exercise $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:type_of_exercises,name',
        ]);

        $id->update([
            'name' => $validatedData['name'],
        ]);

        return response()->json([
            'message' => 'Type of exercise updated successfully',
            'data' => $id,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_of_exercise $id)
    {
        $id->delete();

        return response()->json([
            'message' => 'Type of exercise deleted successfully',
            'data' => $id,
        ], 200);
    }
}
