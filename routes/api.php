<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthSessionController;


Route::post('login', [AuthSessionController::class, 'login']);
Route::post('register', [AuthSessionController::class, 'register']);
 
Route::middleware('auth:api')->group(function () {
    Route::get('user',[AuthSessionController::class ,'details']);
 });

