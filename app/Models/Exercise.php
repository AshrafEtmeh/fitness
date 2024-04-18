<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ObjectiveExercise;
class Exercise extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function objectives(){
        return $this->belongsToMany(ObjectiveExercise::class,'steps');
    }
}
