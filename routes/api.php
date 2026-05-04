<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// test route
Route::get('/test', function () {
    return "API tttttt ";
});

// events route
Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);

// existing route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});