<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::post('/Epi', [EPIController::class,'store']); //ok

route::get('/Epis', [EPIController::class,'index']); //ok

route::get('/Epi/{id}', [EPIController::class,'show']);

route::put('/Epi/{id}', [EPIController::class,'update']);

route::delete('/Epi/{id}', [EPIController::class,'destroy']);
