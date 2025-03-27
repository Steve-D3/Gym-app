<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equipment = [
            ['name' => 'Barbell', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dumbbell', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kettlebell', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Weight Plates', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Curl Bar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trap Bar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Adjustable Dumbbells', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cable Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smith Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leg Press Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hack Squat Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leg Extension Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Leg Curl Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seated Row Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lat Pulldown Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pec Deck Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shoulder Press Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chest Press Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Squat Rack', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Power Rack', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bench Press', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Adjustable Bench', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Preacher Curl Bench', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Resistance Bands', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TRX Suspension Trainer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Battle Ropes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Medicine Ball', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sandbags', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Plyometric Box', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Weighted Vest', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ankle Weights', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Treadmill', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stationary Bike', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rowing Machine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Elliptical Trainer', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stair Climber', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Air Bike', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Foam Roller', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Massage Gun', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stability Ball', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yoga Mat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pull-Up Bar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dip Station', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Parallettes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gymnastic Rings', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('equipment')->insert($equipment);
    }
}
