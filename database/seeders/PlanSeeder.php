<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            "name"=> "strengthen  immune system",
            "name_arabic"=> "خطة تقوية الجهاز المناعي",
            "diet_id"=> 1,
        ]);
        Plan::create([
            "name"=> "stomach muscles plan",
            "name_arabic"=> "خطة تضخيم عضلات البطن",
            "diet_id"=> 2,
        ]);
        Plan::create([
            "name"=> "Arm enlargement plan",
            "name_arabic"=> "خطة تضخيم الذراعين",
            "diet_id"=> 2,
        ]);
        Plan::create([
            "name"=> "perfect body plan",
            "name_arabic"=> "خطة الجسم المثالي",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "Calorie burner plan",
            "name_arabic"=> "خطة حارق السعرات الحرارية",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "Lose weight plan",
            "name_arabic"=> "خطة خسارة الوزن",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "keep fit plan",
            "name_arabic"=> "خطة الاحتفاظ باللياقة",
            "diet_id"=> 4,
        ]);
    }
}
