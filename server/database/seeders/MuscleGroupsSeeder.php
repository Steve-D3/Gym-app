<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $muscleGroups = [
            ['name' => 'Chest', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Back', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shoulders', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biceps', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Triceps', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Forearms', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Abs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Obliques', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Glutes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Quadriceps', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hamstrings', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Calves', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Traps', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lats', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('muscle_groups')->insert($muscleGroups);

    }
}
