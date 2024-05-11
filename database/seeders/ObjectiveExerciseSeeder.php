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
            "name"=> "stomach muscles exercises",
            "name_arabic"=> "تمارين عضلات البطن",
        ]);
        ObjectiveExercise::create([
            "name"=> "Chest exercises",
            "name_arabic"=> "تمارين الصدر",
        ]);
        ObjectiveExercise::create([
            "name"=> "Leg exercises",
            "name_arabic"=> "تمارين الساقين",
        ]);
        ObjectiveExercise::create([
            "name"=> "Arm exercises",
            "name_arabic"=> "تمارين الذراع",
        ]);
        ObjectiveExercise::create([
            "name"=> "Back and shoulder exercises",
            "name_arabic"=> "تمارين الظهر و الكتفان",
        ]);
        ObjectiveExercise::create([
            "name"=> "Biceps exercises",
            "name_arabic"=> "تمارين العضلة ذات الرئيسين",
        ]);
        ObjectiveExercise::create([
            "name"=> "Triceps exercises",
            "name_arabic"=> "تمارين العضلة ثلاثية الرؤوس",
        ]);
        ObjectiveExercise::create([
            "name"=> "Running exercises",
            "name_arabic"=> "تمارين الجري و اللياقة البدنية",
        ]);
        ObjectiveExercise::create([
            "name"=> "Forearm exercises",
            "name_arabic"=> "تمارين الساعد",
        ]);
        ObjectiveExercise::create([
            "name"=> "Push-ups",
            "name_arabic"=> "تمارين  الضغط",
        ]);
        ObjectiveExercise::create([
            "name"=> "Plank exercises",
            "name_arabic"=> "تمارين البلانك",
        ]);
        ObjectiveExercise::create([
            "name"=> "weight exercises",
            "name_arabic"=> "تمارين الأوزان",
        ]);
    }
}
