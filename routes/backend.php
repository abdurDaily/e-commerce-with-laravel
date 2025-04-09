<?php

use App\Http\Controllers\backend\category\CategoryController;
use App\Http\Controllers\backend\product\ProductController;
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
    Route::get('/sub-category', [CategoryController::class, 'subCategory'])->name('sub.category');
    Route::post('/sub-category-store', [CategoryController::class, 'subCategoryStore'])->name('sub.category.store');
    Route::get('/sub-category-edit/{id}', [CategoryController::class, 'subCategoryEdit'])->name('sub.category.edit');
    Route::put('/sub-category-update/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('sub.category.update');
});


// PRODUCT 
Route::prefix('product')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::post('/product-store', [ProductController::class, 'productStore'])->name('product.store');
    Route::delete('/product-delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
});



