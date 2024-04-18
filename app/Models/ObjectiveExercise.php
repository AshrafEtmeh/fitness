<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exercise;
class ObjectiveExercise extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function exercises(){
        return $this->belongsToMany(Exercise::class,'steps');
    }
}
