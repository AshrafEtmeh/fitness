<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ChallengeController;
use App\Http\Controllers\api\DietController;
use App\Http\Controllers\api\ExerciseController;
use App\Http\Controllers\api\MealController;
use App\Http\Controllers\api\ObjectiveExerciseController;
use App\Http\Controllers\api\PlanController;
use App\Http\Controllers\api\RecordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FavoriteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//jwt authentication routes:
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
//protected routes:
Route::group(['middleware' => ['jwt.verify']], function() {
    //...
});

Route::get('/exercises', [ExerciseController::class, 'index']);
Route::get('/exercises/{id}', [ExerciseController::class, 'show']);
Route::get('/search/{name}', [ExerciseController::class,'search']);
//--
Route::get('/objectives', [ObjectiveExerciseController::class, 'index']);
Route::get('/objectives/{id}', [ObjectiveExerciseController::class, 'show']);
//----
Route::get('/challenges', [ChallengeController::class,'index']);
Route::get('/challenges/{id}', [ChallengeController::class,'show']);
//--
Route::get('/plans', [PlanController::class,'index']);
Route::get('/plans/{id}', [PlanController::class,'show']);
//--
Route::get('/diets', [DietController::class,'index']);
Route::get('/diets/{id}', [DietController::class,'show']);
//---
Route::get('/meals', [MealController::class,'index']);
Route::get('/meals/{id}', [MealController::class,'show']);
// records:
    //in:
Route::get('/recordChallenge/{user_id}/{challenge_id}', [RecordController::class, 'recordChallenge']);
Route::get('/recordPlan/{user_id}/{plan_id}', [RecordController::class,'recordPlan']);
Route::get('/recordExercise/{user_id}/{exercise_id}', [RecordController::class,'recordExercise']);
    //out:
Route::get('/challengeRecord/{id}', [RecordController::class,'challengeRecord']);
Route::get('/planRecord/{id}', [RecordController::class,'planRecord']);
Route::get('/exerciseRecord/{id}', [RecordController::class,'exerciseRecord']);

Route::post('/favorite/add/{user_id}/{exercise_id}', [FavoriteController::class, 'add']);
Route::get('/favorite/show/{user_id}', [FavoriteController::class, 'show']);
Route::delete('/favorite/delete/{id}', [FavoriteController::class, 'destroy']);
Route::delete('/favorite/delete/all/{user_id}', [FavoriteController::class, 'destroyAll']);

