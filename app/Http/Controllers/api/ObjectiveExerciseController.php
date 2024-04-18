<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseResource;
use Illuminate\Http\Request;
use App\Models\ObjectiveExercise;
use App\Http\Resources\ObjectiveExerciseResource;

class ObjectiveExerciseController extends Controller
{
    use ApiResponseTrait;

    public function index(){
        $objectives = ObjectiveExerciseResource::collection(ObjectiveExercise::all());
        return $this->apiResponse($objectives,200,'ok');
    }

    public function show($id){
        $objective = ObjectiveExercise::find($id);
        if($objective){
            return $objective->exercises;
            // $exercises = ExerciseResource::collection($objective->exercises);
            // return $this->apiResponse($exercises,200,'ok');
        }
        return $this->apiResponse(null,401,'not found');
    }
}
