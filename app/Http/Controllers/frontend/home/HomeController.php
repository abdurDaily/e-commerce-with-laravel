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

    $parentIds = Category::whereNotNull('parent_id')->pluck('parent_id');

    $categories = Category::whereIn('id', $parentIds)
      ->select('id', 'category_title', 'category_img')
      ->get();
    // dd($categories);
    return view('index', compact('categories'));
  }

  //SUB-CATEGORY 

  public function subCategory($id)
  {
    // Step 1: Get subcategories under this parent category
    $subCategoryIds = Category::where('parent_id', $id)->pluck('id');

    // Step 2: Get products where category_id is in those subcategory IDs
    $products = Product::whereIn('category_id', $subCategoryIds)
      ->with('category') // optional: load category info
      ->latest()
      ->get();
      
    dd($products);

    // Optional: get parent category for displaying title
    $parentCategory = Category::find($id);

    return view('frontend.sub_category.index', compact('products'));
  }
}
