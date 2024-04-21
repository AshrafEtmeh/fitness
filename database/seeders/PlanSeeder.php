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
            "name"=> "plan 1",
            "name_arabic"=> "",
            "diet_id"=> 1,
        ]);
        Plan::create([
            "name"=> "plan 2",
            "name_arabic"=> "",
            "diet_id"=> 2,
        ]);
        Plan::create([
            "name"=> "plan 3",
            "name_arabic"=> "",
            "diet_id"=> 2,
        ]);
        Plan::create([
            "name"=> "plan 4",
            "name_arabic"=> "",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "plan 5",
            "name_arabic"=> "",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "plan 6",
            "name_arabic"=> "",
            "diet_id"=> 3,
        ]);
        Plan::create([
            "name"=> "plan 7",
            "name_arabic"=> "",
            "diet_id"=> 4,
        ]);
        Plan::create([
            "name"=> "plan 8",
            "name_arabic"=> "",
            "diet_id"=> 4,
        ]);
        Plan::create([
            "name"=> "plan 9",
            "name_arabic"=> "",
            "diet_id"=> 4,
        ]);
        Plan::create([
            "name"=> "plan 10",
            "name_arabic"=> "",
            "diet_id"=> 4,
        ]);
        Plan::create([
            "name"=> "plan 11",
            "name_arabic"=> "",
            "diet_id"=> 5,
        ]);
        Plan::create([
            "name"=> "plan 12",
            "name_arabic"=> "",
            "diet_id"=> 5,
        ]);
        Plan::create([
            "name"=> "plan 13",
            "name_arabic"=> "",
            "diet_id"=> 5,
        ]);
        Plan::create([
            "name"=> "plan 14",
            "name_arabic"=> "",
            "diet_id"=> 5,
        ]);
        Plan::create([
            "name"=> "plan 15",
            "name_arabic"=> "",
            "diet_id"=> 5,
        ]);
    }
}
