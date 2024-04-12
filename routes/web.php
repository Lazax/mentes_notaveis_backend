<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::prefix('state')->group(function () {
        Route::get('', [StateController::class, 'index']);
        Route::get('{id}', [StateController::class, 'show']);
    });

    Route::prefix('city')->group(function () {
        Route::get('', [CityController::class, 'index']);
        Route::get('{id}', [CityController::class, 'show']);
    });

    Route::prefix('address')->group(function () {
        Route::get('', [AddressController::class, 'index']);
        Route::get('{id}', [AddressController::class, 'show']);
    });

    Route::prefix('user')->group(function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('{id}', [UserController::class, 'show']);
        Route::post('', [UserController::class, 'store']);
        Route::put('{id}', [UserController::class, 'update']);
        Route::delete('{id}', [UserController::class, 'destroy']);
    });
});
