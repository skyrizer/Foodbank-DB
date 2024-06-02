<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

route::get('test', [HomeController::class,'index']);

route::post('api/register', [AuthController::class, 'register']);
