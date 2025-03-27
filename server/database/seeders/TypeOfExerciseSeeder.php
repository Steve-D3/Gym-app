<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now(); // Get the current timestamp

        $types = [
            ['name' => 'Strength Training', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Weightlifting', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Powerlifting', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Calisthenics', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Olympic Lifting', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cardio', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Running', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cycling', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Swimming', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rowing', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jump Rope', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'HIIT', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Flexibility Training', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Static Stretching', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dynamic Stretching', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Yoga', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pilates', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Balance Training', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Core Workouts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Functional Fitness', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'CrossFit', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kettlebell Training', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Plyometrics', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Battle Ropes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Agility Training', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('type_of_exercises')->insert($types);
    }
}
