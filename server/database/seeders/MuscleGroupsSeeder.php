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
            ['name' => 'Chest'],
            ['name' => 'Back'],
            ['name' => 'Shoulders'],
            ['name' => 'Biceps'],
            ['name' => 'Triceps'],
            ['name' => 'Forearms'],
            ['name' => 'Abs'],
            ['name' => 'Obliques'],
            ['name' => 'Glutes'],
            ['name' => 'Quadriceps'],
            ['name' => 'Hamstrings'],
            ['name' => 'Calves'],
            ['name' => 'Traps'],
            ['name' => 'Lats'],
        ];

        DB::table('muscle_groups')->insert($muscleGroups);

    }
}
