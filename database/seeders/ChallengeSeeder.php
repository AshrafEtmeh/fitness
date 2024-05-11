<?php

namespace Database\Seeders;

use App\Models\Challenge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // public function base(Model $model,$parameter1,$parameter2,$parameter3=null) {
    //     $class = new $model;
    // }
    public function fill(Model $class,string $name, string $name_arabic) {
        $class::create([
            "name"=> $name,
            "name_arabic"=> $name_arabic,
        ]);

    }
    public function run(): void
    {
        $this->fill(new Challenge,"level max","مستوى الوحش");
        Challenge::create([
            "name"=> "plank challenge",
            "name_arabic"=> "تحدي البلانك",
        ]);
        Challenge::create([
            "name"=> "Push-ups",
            "name_arabic"=> "تحدي تمارين الضغط",
        ]);
        Challenge::create([
            "name"=> "days 3 challenge",
            "name_arabic"=> "تحدي 3 ايام",
        ]);
        Challenge::create([
            "name"=> "days 7 challenge",
            "name_arabic"=> "تحدي 7 يوم",
        ]);
        Challenge::create([
            "name"=> "days 10 challenge",
            "name_arabic"=> "تحدي 10 يوم",
        ]);
        Challenge::create([
            "name"=> "HIIT challenge",
            "name_arabic"=> "تحدي التحمل والصبر",
        ]);
    }
}
