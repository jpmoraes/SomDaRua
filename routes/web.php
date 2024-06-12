<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\saibamaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class,'index']);
Route::get('/saibamais', [saibamaisController::class,'index']);
