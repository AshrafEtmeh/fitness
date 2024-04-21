<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::all();
        return $this->apiResponse($plans,200,'ok');
    }
    public function show($id){
        $plan = Plan::find($id);
        if($plan){
            return [
                'challenge' => $plan,
                'exercises' => $plan->exercises,
            ];
        }
            return $this->apiResponse(null,401,'not found');
    }}
