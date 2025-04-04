<?php

use App\Http\Controllers\backend\category\CategoryController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

// CATEGORY 
Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category-store', [CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category-edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::put('/category-update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::delete('/category-delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');
});

