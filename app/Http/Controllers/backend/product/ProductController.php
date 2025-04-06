<?php

namespace App\Http\Controllers\backend\product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //INDEX 
    public function index(){
        $categories = Category::whereNotNull('sub_category_title')->get();
        return view('product.index');
    }

    //PRODUCT INSERT FORM 
    public function product(){
        return view('product_form');
    }
}
