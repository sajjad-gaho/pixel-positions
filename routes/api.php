<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

//Public Route (Without Login Challenge)
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

//Protected Route (Work with Token Chalenge)
    Route::get('/user', function (Request $request){
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);
});

// use App\Models\Job;

Route::get('/jobs', function () {
    return Job::latest()->get();
});

