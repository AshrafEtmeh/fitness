<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function add($user_id,$exercise_id) {
        Favorite::create([
            'user_id' => $user_id,
            'exercise_id' => $exercise_id,
        ]);
        return response('added to favorite successfully.');
    }
    public function show($user_id){
        return Favorite::get()->where('user_id',$user_id);
    }
    public function destroy($id) {
        $favorite = Favorite::find($id);
        if ($favorite) {
            $favorite->delete();
            return response('deleted');
        }
        return \response('not existing');
    }
    public function destroyAll($user_id) {
        $favorites = Favorite::get()->where('user_id',$user_id);
        // return $favorites;
        if($favorites) {
            $favorites->map->delete();
            return response('deleted all');
        }
        return \response('not existing any');
    }
}
