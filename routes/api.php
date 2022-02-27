<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ConstructorsController;
use App\Http\Controllers\v1\DriversController;
use App\Http\Controllers\v1\RacesController;
use App\Http\Controllers\v1\SeasonsController;
use App\Http\Controllers\v1\ParticipationsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => '', 'prefix' => 'v1'],
    function() {
        Route::apiResource('constructors', ConstructorsController::class);
        Route::apiResource('drivers', DriversController::class);
        Route::apiResource('races', RacesController::class);

        Route::get('seasons/{id}/get_races', [SeasonsController::class, 'get_races']);
        Route::apiResource('seasons', SeasonsController::class);

        Route::apiResource('participations', ParticipationsController::class);
    }
);