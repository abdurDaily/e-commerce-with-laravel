<?php

namespace App\Http\Controllers\frontend\home;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    // HOME 
    public function index(){
      $categories = Category::whereNotNull('category_title')->latest()->get();
      return view('index', compact('categories'));
    }
}
