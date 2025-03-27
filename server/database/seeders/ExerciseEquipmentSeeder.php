<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseEquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exerciseEquipment = [
            // Chest exercises
            ['exercise_id' => 1, 'equipment_id' => 2], // Bench Press - Barbell
            ['exercise_id' => 1, 'equipment_id' => 23], // Bench Press - Adjustable Bench
            ['exercise_id' => 2, 'equipment_id' => 2], // Incline Bench Press - Barbell
            ['exercise_id' => 2, 'equipment_id' => 23], // Incline Bench Press - Adjustable Bench
            ['exercise_id' => 3, 'equipment_id' => 2], // Decline Bench Press - Barbell
            ['exercise_id' => 3, 'equipment_id' => 23], // Decline Bench Press - Adjustable Bench
            ['exercise_id' => 4, 'equipment_id' => 3], // Dumbbell Fly - Dumbbell
            ['exercise_id' => 5, 'equipment_id' => 9], // Cable Crossovers - Cable Machine
            ['exercise_id' => 6, 'equipment_id' => 1], // Push-Ups - Bodyweight

            // Back exercises
            ['exercise_id' => 7, 'equipment_id' => 1], // Pull-Ups - Bodyweight
            ['exercise_id' => 8, 'equipment_id' => 16], // Lat Pulldown - Lat Pulldown Machine
            ['exercise_id' => 9, 'equipment_id' => 2], // Bent-Over Row - Barbell
            ['exercise_id' => 10, 'equipment_id' => 9], // Seated Cable Row - Cable Machine
            ['exercise_id' => 11, 'equipment_id' => 9], // T-Bar Row - Cable Machine
            ['exercise_id' => 12, 'equipment_id' => 9], // Face Pulls - Cable Machine

            // Leg exercises
            ['exercise_id' => 13, 'equipment_id' => 2], // Squats - Barbell
            ['exercise_id' => 13, 'equipment_id' => 20], // Squats - Squat Rack
            ['exercise_id' => 14, 'equipment_id' => 2], // Front Squats - Barbell
            ['exercise_id' => 14, 'equipment_id' => 20], // Front Squats - Squat Rack
            ['exercise_id' => 15, 'equipment_id' => 2], // Bulgarian Split Squat - Barbell
            ['exercise_id' => 15, 'equipment_id' => 20], // Bulgarian Split Squat - Squat Rack
            ['exercise_id' => 16, 'equipment_id' => 11], // Leg Press - Leg Press Machine
            ['exercise_id' => 17, 'equipment_id' => 13], // Leg Extensions - Leg Extension Machine
            ['exercise_id' => 18, 'equipment_id' => 2], // Romanian Deadlift - Barbell
            ['exercise_id' => 19, 'equipment_id' => 14], // Hamstring Curl - Leg Curl Machine

            // Shoulder exercises
            ['exercise_id' => 20, 'equipment_id' => 2], // Overhead Press - Barbell
            ['exercise_id' => 21, 'equipment_id' => 3], // Dumbbell Shoulder Press - Dumbbell
            ['exercise_id' => 22, 'equipment_id' => 3], // Arnold Press - Dumbbell
            ['exercise_id' => 23, 'equipment_id' => 3], // Lateral Raises - Dumbbell
            ['exercise_id' => 24, 'equipment_id' => 3], // Front Raises - Dumbbell

            // Arm exercises
            ['exercise_id' => 25, 'equipment_id' => 3], // Bicep Curls - Dumbbell
            ['exercise_id' => 26, 'equipment_id' => 3], // Hammer Curls - Dumbbell
            ['exercise_id' => 27, 'equipment_id' => 1], // Tricep Dips - Bodyweight
            ['exercise_id' => 28, 'equipment_id' => 2], // Skull Crushers - Barbell
            ['exercise_id' => 29, 'equipment_id' => 9], // Tricep Rope Pushdown - Cable Machine

            // Core exercises
            ['exercise_id' => 30, 'equipment_id' => 1], // Plank - Bodyweight
            ['exercise_id' => 31, 'equipment_id' => 1], // Hanging Leg Raises - Bodyweight
            ['exercise_id' => 32, 'equipment_id' => 1], // Russian Twists - Bodyweight
            ['exercise_id' => 33, 'equipment_id' => 1], // Ab Rollout - Bodyweight
            ['exercise_id' => 34, 'equipment_id' => 9], // Cable Crunch - Cable Machine
        ];

        DB::table('exercise_equipment')->insert($exerciseEquipment);
    }
}
