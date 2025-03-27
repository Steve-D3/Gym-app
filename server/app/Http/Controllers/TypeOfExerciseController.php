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
        return Type_of_exercise::select('id', 'name')->get();
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
        //
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
    public function update(Request $request, Type_of_exercise $type_of_exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_of_exercise $type_of_exercise)
    {
        //
    }
}
