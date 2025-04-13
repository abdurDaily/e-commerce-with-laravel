<?php

use App\Http\Controllers\frontend\home\HomeController;
use Illuminate\Support\Facades\Route;

// INDEX 
Route::get('/', [HomeController::class, 'index'])->name('index');




