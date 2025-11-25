<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('first',[TestController::class,'index']);
Route::post('create',[TestController::class,'create']);
Route::get('getStudent',[TestController::class,'getStudent']);


