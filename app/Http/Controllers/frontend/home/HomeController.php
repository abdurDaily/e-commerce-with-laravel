<?php

namespace App\Http\Controllers\frontend\home;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
  // HOME 
  public function index()
  {
    $categories = Category::whereNotNull('category_title')->latest()->get();
    return view('index', compact('categories'));
  }

  //SUB-CATEGORY 
  public function subCategory($category_slug)
  {
    $sub_category = Category::where('category_slug', $category_slug)->firstOrFail();
    // dd($sub_category);
    return view('frontend.sub_category.index', compact('sub_category'));
  }
}
