<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExercisesRequest;
use App\Http\Requests\UpdateExercisesRequest;
use App\Http\Resources\ExerciseResource;
use App\Models\Equipment;
use App\Models\Exercises;
use App\Models\Muscle_groups;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ExerciseResource::collection(Exercises::with(['type_of_exercise', 'equipment', 'muscle_group'])->get());
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
    public function store(StoreExercisesRequest $request)
    {
        // Step 1: Create the exercise with only the required fields
        $exercise = Exercises::create($request->only(['name', 'description', 'type_of_exercise_id']));

        // Step 2: Create connections for the pivot tables if provided
        if ($request->has('equipment_id')) {
            $exercise->equipment()->sync($request->input('equipment_id'));
        }

        if ($request->has('muscle_group_id')) {
            $exercise->muscle_group()->sync($request->input('muscle_group_id'));
        }

        // Step 3: Return the created exercise as a resource
        return new ExerciseResource($exercise->load(['type_of_exercise', 'equipment', 'muscle_group']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercises $id)
    {
        return new ExerciseResource($id->load(['type_of_exercise', 'equipment', 'muscle_group']));
    }

    /**
     * Display the specified resource.
     */
    public function search_by_name(string $name)
    {
        $exercise = Exercises::where('name', 'like', '%' . $name . '%')
            ->with(['type_of_exercise', 'equipment', 'muscle_group'])
            ->get();

        if (!$exercise) {
            return response()->json(['message' => 'Exercise not found'], 404);
        }

        return ExerciseResource::collection($exercise);
    }

    /**
     * Display the specified resource.
     */
    public function search_by_equipment(string $name)
    {
        $equipment = Equipment::where('name', 'like', '%' . ucfirst($name) . '%')->first();

        if (!$equipment) {
            return response()->json(['message' => 'Equipment not found'], 404);
        }

        $exercises = Exercises::whereHas('equipment', function ($query) use ($name) {
            $query->where('name', 'like', '%' . ucfirst($name) . '%');
        })
            ->with(['type_of_exercise', 'equipment', 'muscle_group'])
            ->get();


        return ExerciseResource::collection($exercises);
    }

    /**
     * Display the specified resource.
     */
    public function search_by_muscle_group(string $name)
    {
        $group = Muscle_groups::where('name', 'like', '%' . ucfirst($name) . '%')->first();

        if (!$group) {
            return response()->json(['message' => 'Muscle group not found'], 404);
        }

        $exercises = Exercises::whereHas('muscle_group', function ($query) use ($name) {
            $query->where('name', 'like', '%' . ucfirst($name) . '%');
        })
            ->with(['type_of_exercise', 'equipment', 'muscle_group'])
            ->get();


        return ExerciseResource::collection($exercises);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercises $exercises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExercisesRequest $request, Exercises $id)
    {
        // Update only the fields provided in the request
        $id->update($request->validated());

        // Sync relationships if necessary
        if ($request->has('equipment_id')) {
            $id->equipment()->sync($request->input('equipment_id'));
        }

        if ($request->has('muscle_group_id')) {
            $id->muscle_group()->sync($request->input('muscle_group_id'));
        }

        // Return the updated exercise as a resource
        return new ExerciseResource($id->load(['type_of_exercise', 'equipment', 'muscle_group']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercises $exercise_id)
    {
        $exercise_id->delete();

        return response()->json(['message' => 'Exercise deleted successfully'], 200);
    }
}
