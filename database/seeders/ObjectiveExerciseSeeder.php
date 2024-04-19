<?php

namespace Database\Seeders;

use App\Models\ObjectiveExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectiveExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ObjectiveExercise::truncate();
        ObjectiveExercise::create([
            "name"=> "Full body",
            "name_arabic"=> "كامل الجسم",
        ]);
        ObjectiveExercise::create([
            "name"=> "Arms",
            "name_arabic"=> "الساعدين",
        ]);
        ObjectiveExercise::create([
            "name"=> "Abs",
            "name_arabic"=> "المعدة",
        ]);
        ObjectiveExercise::create([
            "name"=> "Chest",
            "name_arabic"=> "الصدر",
        ]);
        ObjectiveExercise::create([
            "name"=> "Legs",
            "name_arabic"=> "الساقين",
        ]);
        ObjectiveExercise::create([
            "name"=> "Back",
            "name_arabic"=> "الظهر",
        ]);
    }
}
