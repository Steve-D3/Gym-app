<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            // 🏋️‍♂️ **Chest Exercises**
            ['name' => 'Bench Press', 'description' => 'Classic compound chest exercise using a barbell.', 'type_of_exercise_id' => 1],
            ['name' => 'Incline Bench Press', 'description' => 'Targets upper chest with a barbell.', 'type_of_exercise_id' => 1],
            ['name' => 'Decline Bench Press', 'description' => 'Targets lower chest.', 'type_of_exercise_id' => 1],
            ['name' => 'Dumbbell Fly', 'description' => 'Isolation movement for chest development.', 'type_of_exercise_id' => 3],
            ['name' => 'Cable Crossovers', 'description' => 'A cable-based chest isolation exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Push-Ups', 'description' => 'Bodyweight chest exercise.', 'type_of_exercise_id' => 2],

            // 💪 **Back Exercises**
            ['name' => 'Pull-Ups', 'description' => 'A bodyweight compound back exercise.', 'type_of_exercise_id' => 2],
            ['name' => 'Lat Pulldown', 'description' => 'A machine-based back exercise.', 'type_of_exercise_id' => 1],
            ['name' => 'Bent-Over Row', 'description' => 'A barbell back exercise.', 'type_of_exercise_id' => 1],
            ['name' => 'Seated Cable Row', 'description' => 'A seated rowing exercise for the back.', 'type_of_exercise_id' => 1],
            ['name' => 'T-Bar Row', 'description' => 'A weighted row exercise.', 'type_of_exercise_id' => 1],
            ['name' => 'Face Pulls', 'description' => 'A cable exercise for the upper back.', 'type_of_exercise_id' => 3],

            // 🦵 **Leg Exercises**
            ['name' => 'Squats', 'description' => 'A foundational lower-body compound movement.', 'type_of_exercise_id' => 1],
            ['name' => 'Front Squats', 'description' => 'Squats with the barbell in front.', 'type_of_exercise_id' => 1],
            ['name' => 'Bulgarian Split Squat', 'description' => 'A unilateral leg exercise.', 'type_of_exercise_id' => 1],
            ['name' => 'Leg Press', 'description' => 'A machine-based lower body exercise.', 'type_of_exercise_id' => 1],
            ['name' => 'Leg Extensions', 'description' => 'A machine-based quad isolation exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Romanian Deadlift', 'description' => 'A hamstring-dominant deadlift variation.', 'type_of_exercise_id' => 1],
            ['name' => 'Hamstring Curl', 'description' => 'A machine-based hamstring isolation exercise.', 'type_of_exercise_id' => 3],

            // 🏋️‍♀️ **Shoulder Exercises**
            ['name' => 'Overhead Press', 'description' => 'A barbell press targeting shoulders.', 'type_of_exercise_id' => 1],
            ['name' => 'Dumbbell Shoulder Press', 'description' => 'A shoulder press using dumbbells.', 'type_of_exercise_id' => 1],
            ['name' => 'Arnold Press', 'description' => 'A twisting dumbbell press for shoulders.', 'type_of_exercise_id' => 1],
            ['name' => 'Lateral Raises', 'description' => 'An isolation movement for side delts.', 'type_of_exercise_id' => 3],
            ['name' => 'Front Raises', 'description' => 'An isolation movement for front delts.', 'type_of_exercise_id' => 3],

            // 🏋️‍♂️ **Arm Exercises**
            ['name' => 'Bicep Curls', 'description' => 'A classic bicep isolation exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Hammer Curls', 'description' => 'A bicep and forearm exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Tricep Dips', 'description' => 'A bodyweight tricep exercise.', 'type_of_exercise_id' => 2],
            ['name' => 'Skull Crushers', 'description' => 'A barbell tricep extension exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Tricep Rope Pushdown', 'description' => 'A cable tricep exercise.', 'type_of_exercise_id' => 3],

            // 🔥 **Core Exercises**
            ['name' => 'Plank', 'description' => 'A core stability exercise.', 'type_of_exercise_id' => 2],
            ['name' => 'Hanging Leg Raises', 'description' => 'A hanging core exercise.', 'type_of_exercise_id' => 2],
            ['name' => 'Russian Twists', 'description' => 'A twisting core exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Ab Rollout', 'description' => 'A full-range core exercise.', 'type_of_exercise_id' => 3],
            ['name' => 'Cable Crunch', 'description' => 'A weighted core flexion exercise.', 'type_of_exercise_id' => 3],
        ];

        DB::table('exercises')->insert($exercises);
    }
}
