<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Challenge::create([
            "name"=> "level 1",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 2",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 3",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 4",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 5",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 6",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 7",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 8",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 9",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 10",
            "name_arabic"=> "",
        ]);
        Challenge::create([
            "name"=> "level 11",
            "name_arabic"=> "",
        ]);
    }
}
