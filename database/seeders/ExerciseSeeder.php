<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exercise::create([
            "name"=> "push-up",
            "name_arabic"=> "ضغط",
        ]);
        Exercise::create([
            "name"=> "pull-up",
            "name_arabic"=> "عقلة",
        ]);
        Exercise::create([
            "name"=> "squat",
            "name_arabic"=> "سكواد",
        ]);
        Exercise::create([
            "name"=> "leg press",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "lunge",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "deadlift",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "leg extension",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "bench press",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "pull-down",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "shoulder shrug",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "leg raise",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "leg curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "bent-over row",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "upright row",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "crunch",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "russian twist",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "standing calf raise",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "seated calf raise",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "chest fly",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "shoulder press",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "leteral raise",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "pushdown",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "triceps extension",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "preacher curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "standing barbell curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "alternating rotating dumbbell curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "hammer curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "zottmann curl",
            "name_arabic"=> "",
        ]);
        Exercise::create([
            "name"=> "back extension",
            "name_arabic"=> "",
        ]);
    }
}
