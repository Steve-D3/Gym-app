<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExerciseMuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exerciseMuscles = [
            // Chest exercises
            ['exercise_id' => 1, 'muscle_group_id' => 1], // Bench Press - Chest
            ['exercise_id' => 2, 'muscle_group_id' => 1], // Incline Bench Press - Chest
            ['exercise_id' => 3, 'muscle_group_id' => 1], // Decline Bench Press - Chest
            ['exercise_id' => 4, 'muscle_group_id' => 1], // Dumbbell Fly - Chest
            ['exercise_id' => 5, 'muscle_group_id' => 1], // Cable Crossovers - Chest
            ['exercise_id' => 6, 'muscle_group_id' => 1], // Push-Ups - Chest

            // Back exercises
            ['exercise_id' => 7, 'muscle_group_id' => 2], // Pull-Ups - Back
            ['exercise_id' => 8, 'muscle_group_id' => 2], // Lat Pulldown - Back
            ['exercise_id' => 9, 'muscle_group_id' => 2], // Bent-Over Row - Back
            ['exercise_id' => 10, 'muscle_group_id' => 2], // Seated Cable Row - Back
            ['exercise_id' => 11, 'muscle_group_id' => 2], // T-Bar Row - Back
            ['exercise_id' => 12, 'muscle_group_id' => 2], // Face Pulls - Back

            // Leg exercises
            ['exercise_id' => 13, 'muscle_group_id' => 10], // Squats - Quadriceps
            ['exercise_id' => 13, 'muscle_group_id' => 9], // Squats - Glutes
            ['exercise_id' => 14, 'muscle_group_id' => 10], // Front Squats - Quadriceps
            ['exercise_id' => 15, 'muscle_group_id' => 10], // Bulgarian Split Squat - Quadriceps
            ['exercise_id' => 15, 'muscle_group_id' => 9], // Bulgarian Split Squat - Glutes
            ['exercise_id' => 16, 'muscle_group_id' => 10], // Leg Press - Quadriceps
            ['exercise_id' => 17, 'muscle_group_id' => 10], // Leg Extensions - Quadriceps
            ['exercise_id' => 18, 'muscle_group_id' => 11], // Romanian Deadlift - Hamstrings
            ['exercise_id' => 19, 'muscle_group_id' => 11], // Hamstring Curl - Hamstrings

            // Shoulder exercises
            ['exercise_id' => 20, 'muscle_group_id' => 3], // Overhead Press - Shoulders
            ['exercise_id' => 21, 'muscle_group_id' => 3], // Dumbbell Shoulder Press - Shoulders
            ['exercise_id' => 22, 'muscle_group_id' => 3], // Arnold Press - Shoulders
            ['exercise_id' => 23, 'muscle_group_id' => 3], // Lateral Raises - Shoulders
            ['exercise_id' => 24, 'muscle_group_id' => 3], // Front Raises - Shoulders

            // Arm exercises
            ['exercise_id' => 25, 'muscle_group_id' => 4], // Bicep Curls - Biceps
            ['exercise_id' => 26, 'muscle_group_id' => 4], // Hammer Curls - Biceps
            ['exercise_id' => 26, 'muscle_group_id' => 6], // Hammer Curls - Forearms
            ['exercise_id' => 27, 'muscle_group_id' => 5], // Tricep Dips - Triceps
            ['exercise_id' => 28, 'muscle_group_id' => 5], // Skull Crushers - Triceps
            ['exercise_id' => 29, 'muscle_group_id' => 5], // Tricep Rope Pushdown - Triceps

            // Core exercises
            ['exercise_id' => 30, 'muscle_group_id' => 7], // Plank - Abs
            ['exercise_id' => 31, 'muscle_group_id' => 7], // Hanging Leg Raises - Abs
            ['exercise_id' => 31, 'muscle_group_id' => 8], // Hanging Leg Raises - Obliques
            ['exercise_id' => 32, 'muscle_group_id' => 7], // Russian Twists - Abs
            ['exercise_id' => 32, 'muscle_group_id' => 8], // Russian Twists - Obliques
            ['exercise_id' => 33, 'muscle_group_id' => 7], // Ab Rollout - Abs
            ['exercise_id' => 34, 'muscle_group_id' => 7], // Cable Crunch - Abs
        ];

        DB::table('exercise_muscle')->insert($exerciseMuscles);
    }
}
