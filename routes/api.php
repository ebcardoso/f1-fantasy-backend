<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ConstructorsController;
use App\Http\Controllers\v1\DriversController;
use App\Http\Controllers\v1\RacesController;
use App\Http\Controllers\v1\SeasonsController;
use App\Http\Controllers\v1\ParticipationsController;
use App\Http\Controllers\v1\auth\RegisterController;
use App\Http\Controllers\v1\auth\LoginController;
use App\Http\Controllers\v1\game\TicketsController;

//Authentication Routes
Route::prefix('v1/auth')->group(
    function() {
        Route::post('login', [LoginController::class, 'login']);
        Route::middleware('auth:sanctum')->post('logout', [LoginController::class, 'logout']);
        Route::middleware('auth:sanctum')->get('get_user', [LoginController::class, 'get_user']);
        Route::post('register', [RegisterController::class, 'register']);
    }
);

Route::group(['namespace' => '', 'prefix' => 'v1'],
    function() {
        Route::middleware('auth:sanctum')->apiResource('constructors', ConstructorsController::class);
        Route::middleware('auth:sanctum')->apiResource('drivers', DriversController::class);
        Route::middleware('auth:sanctum')->apiResource('races', RacesController::class);

        Route::middleware('auth:sanctum')->get('seasons/{id}/get_races', [SeasonsController::class, 'get_races']);
        Route::middleware('auth:sanctum')->apiResource('seasons', SeasonsController::class);

        Route::middleware('auth:sanctum')->apiResource('participations', ParticipationsController::class);

        Route::prefix('game')->group(
            function() {
                Route::middleware('auth:sanctum')->apiResource('tickets', TicketsController::class);
            }
        );
    }
);