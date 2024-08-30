<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/', function(){
return view('welcome');
});

Route::get('/login', [AuthController::class , 'showLogin']);



    Route::get('/page', [ContentController::class , 'index']);
    Route::get('/page/create', [ContentController::class , 'create']);
    Route::post('/page', [ContentController::class , 'add']);

