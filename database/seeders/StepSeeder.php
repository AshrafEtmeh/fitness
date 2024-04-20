<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Step;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 2,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 1,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 3,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 4,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 5,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 6,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 7,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 8,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 9,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 10,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 11,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 12,
        ]);
        Step::create([
            "objective_exercise_id"=> 5,
            "exercise_id"=> 13,
        ]);
        Step::create([
            "objective_exercise_id"=> 5,
            "exercise_id"=> 14,
        ]);
        Step::create([
            "objective_exercise_id"=> 5,
            "exercise_id"=> 16,
        ]);
        Step::create([
            "objective_exercise_id"=> 6,
            "exercise_id"=> 17,
        ]);
        Step::create([
            "objective_exercise_id"=> 6,
            "exercise_id"=> 18,
        ]);
        Step::create([
            "objective_exercise_id"=> 6,
            "exercise_id"=> 19,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 20,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 21,
        ]);
        Step::create([
            "objective_exercise_id"=> 1,
            "exercise_id"=> 22,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 23,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 24,
        ]);
        Step::create([
            "objective_exercise_id"=> 2,
            "exercise_id"=> 25,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 1,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 2,
        ]);
        Step::create([
            "objective_exercise_id"=> 3,
            "exercise_id"=> 4,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 5,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 6,
        ]);
        Step::create([
            "objective_exercise_id"=> 4,
            "exercise_id"=> 7,
        ]);
    }
}
