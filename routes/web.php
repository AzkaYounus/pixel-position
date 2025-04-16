<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;



Route::get('/',[JobController::class,'index']);
//this will create user
Route::get('/register',[RegisteredUserController::class,'create']);
//to store user 
Route::post('/register',[RegisteredUserController::class,'store']);

//login 
Route::get('/login',SessionController::class,'create');
//store that login 
Route::post('/login',SessionController::class,'store');
//logout
Route::delete('/logout',SessionController::class,'destroy');




