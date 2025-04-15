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
    $categories = Category::whereNotNull('category_title')->latest()->get();
    return view('index', compact('categories'));
  }

  //SUB-CATEGORY 

  public function subCategory($id)
{
    // Get subcategories where parent_id matches the given $id
    $subCategories = Category::where('parent_id', $id)->get();
    // Get all the IDs of those subcategories
    $subCategoryIds = $subCategories->pluck('id')->toArray();
    // Optionally, also include the parent category itself
    $subCategoryIds[] = $id;

    // Get all products where category_id is in that list
    $products = Product::whereIn('category_id', $subCategoryIds)->get();

    // dd($products);
    return view('frontend.sub_category.index', compact('products'));
}

}
