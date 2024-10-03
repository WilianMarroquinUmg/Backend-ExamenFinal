<?php

use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function () {

    Route::post('logout', [\App\Http\Controllers\Api\Auth\AuthApiController::class, 'logout'])
        ->name('logout')
        ->middleware('auth:sanctum');

    Route::post('login', [\App\Http\Controllers\Api\Auth\AuthApiController::class, 'login'])
        ->middleware('guest');

});


