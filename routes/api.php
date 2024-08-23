<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'auth'], function () {

    Route::post('login', [\App\Http\Controllers\Api\Auth\AuthApiController::class, 'login'])->middleware('guest');

    Route::post('logout', [\App\Http\Controllers\Api\Auth\AuthApiController::class, 'logout'])->middleware('auth:sanctum');

});

