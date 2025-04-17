<?php

namespace App\Http\Controllers\frontend\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    // HOME 
    public function index()
    {
        // Get categories that are parent categories
        $parentIds = Category::whereNotNull('parent_id')->pluck('parent_id');

        $categories = Category::whereIn('id', $parentIds)
            ->select('id', 'category_title', 'category_img', 'category_slug')
            ->get();

        // dd($parentIds);
        return view('index', compact('categories'));
    }

    // SUBCATEGORY PAGE
    public function subCategory($category_slug)
    {
        // Get the parent category by slug
        $parentCategory = Category::where('category_slug', $category_slug)->firstOrFail();
    
        // Get subcategory IDs under this category
        $subCategoryIds = Category::where('parent_id', $parentCategory->id)->pluck('id')->toArray();
        
        // Combine parent category ID + all subcategory IDs
        $allCategoryIds = array_merge([$parentCategory->id], $subCategoryIds);
        
        // Get all products from these categories
        $products = Product::whereIn('category_id', $allCategoryIds)
        ->with('category')
        ->latest()
        ->get();
        
        // dd($parentCategory,$subCategoryIds,$allCategoryIds,$products);
        return view('frontend.sub_category.index', compact('products', 'parentCategory'));
    }
    
}
