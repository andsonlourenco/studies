<?php

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('series', \App\Http\Controllers\Api\SeriesController::class);
    Route::get('series/{series}/seasons', function(Series $series){
        return $series->seasons;
    });

    Route::get('series/{series}/episodes', function(Series $series){
        return $series->episodes;
    });

    Route::patch('/episodes/{episode}', function (\App\Models\Episode $episode, Request $request) {
        $episode->watched = $request->watched;
        $episode->save();

        return $episode;
    });
});

Route::post('/login', function(Request $request){
    $credentials = $request->only(['email', 'password']);
    if(Auth::attempt($credentials) === false){
        return response()->json('Unauthorized', 401);
    }

    $user = Auth::user();
    $token = $user->createToken('token');

    return response()->json($token->plainTextToken);
});
