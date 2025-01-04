<?php

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
