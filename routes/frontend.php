<?php

use App\Http\Controllers\frontend\home\HomeController;
use Illuminate\Support\Facades\Route;

// INDEX 
Route::get('/', [HomeController::class, 'index'])->name('index');

// SUB-CATEGORIES
Route::get('/sub-categories/{category_slug}', [HomeController::class, 'subCategory'])->name('sub.category');




