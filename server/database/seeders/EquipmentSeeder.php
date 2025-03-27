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
            ['name' => 'Bodyweight'],
            ['name' => 'Barbell'],
            ['name' => 'Dumbbell'],
            ['name' => 'Kettlebell'],
            ['name' => 'Weight Plates'],
            ['name' => 'Curl Bar'],
            ['name' => 'Trap Bar'],
            ['name' => 'Adjustable Dumbbells'],
            ['name' => 'Cable Machine'],
            ['name' => 'Smith Machine'],
            ['name' => 'Leg Press Machine'],
            ['name' => 'Hack Squat Machine'],
            ['name' => 'Leg Extension Machine'],
            ['name' => 'Leg Curl Machine'],
            ['name' => 'Seated Row Machine'],
            ['name' => 'Lat Pulldown Machine'],
            ['name' => 'Pec Deck Machine'],
            ['name' => 'Shoulder Press Machine'],
            ['name' => 'Chest Press Machine'],
            ['name' => 'Squat Rack'],
            ['name' => 'Power Rack'],
            ['name' => 'Bench Press'],
            ['name' => 'Adjustable Bench'],
            ['name' => 'Preacher Curl Bench'],
            ['name' => 'Resistance Bands'],
            ['name' => 'TRX Suspension Trainer'],
            ['name' => 'Battle Ropes'],
            ['name' => 'Medicine Ball'],
            ['name' => 'Sandbags'],
            ['name' => 'Plyometric Box'],
            ['name' => 'Weighted Vest'],
            ['name' => 'Ankle Weights'],
            ['name' => 'Treadmill'],
            ['name' => 'Stationary Bike'],
            ['name' => 'Rowing Machine'],
            ['name' => 'Elliptical Trainer'],
            ['name' => 'Stair Climber'],
            ['name' => 'Air Bike'],
            ['name' => 'Foam Roller'],
            ['name' => 'Massage Gun'],
            ['name' => 'Stability Ball'],
            ['name' => 'Yoga Mat'],
            ['name' => 'Pull-Up Bar'],
            ['name' => 'Dip Station'],
            ['name' => 'Parallettes'],
            ['name' => 'Gymnastic Rings'],
        ];

        DB::table('equipment')->insert($equipment);
    }
}
