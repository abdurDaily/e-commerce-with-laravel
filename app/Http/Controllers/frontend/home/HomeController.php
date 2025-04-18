<?php

namespace App\Http\Controllers\frontend\home;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    // public function subCategory($category_slug)
    // {
    //     // Get the selected category (could be parent or subcategory)
    //     $selectedCategory = Category::where('category_slug', $category_slug)->with(['subcategories'])->firstOrFail();

    //     $allSubCategories = $selectedCategory->subcategories;
    //     dd($allSubCategories);


    //     foreach($allSubCategories as $subProduct){
    //         $productsWithSubCategory = Product::where('category_id', $subProduct->id)->with('category')->get();
    //         // dd($productsWithSubCategory);
    //     }

    //     // If selected category is a parent, get its children as subcategories
    //     if ($selectedCategory->parent_id === null) {
    //         $subCategories = Category::where('parent_id', $selectedCategory->id)->get();

    //         // Get all products under parent + all subcategories
    //         $categoryIds = array_merge(
    //             [$selectedCategory->id],
    //             $subCategories->pluck('id')->toArray()
    //         );
    //     } else {
    //         // Selected category is a subcategory
    //         $subCategories = Category::where('parent_id', $selectedCategory->parent_id)->get();

    //         // Only get products of this subcategory
    //         $categoryIds = [$selectedCategory->id];
    //     }

    //     $products = Product::whereIn('category_id', $categoryIds)
    //         ->with('category')
    //         ->latest()
    //         ->get();

    //     return view('frontend.sub_category.index', compact('products', 'subCategories', 'selectedCategory', 'allSubCategories','productsWithSubCategory'));
    // }

    function subCategory(Request $request, $category_slug)
    {
        $products  = Product::query();
        $selectedCategory = Category::where('category_slug', $category_slug)->with(['subcategories'])->firstOrFail();
        $allSubCategories = $selectedCategory->subcategories;
        // dd($allSubCategories->pluck('id'));

        if ($request->id) {
            $products->whereHas('category', function ($q) use ($request) {
                $q->where('id', $request->id);
            });
        } else {
            $products->whereHas('category', function ($query) use ($category_slug, $allSubCategories) {
                $query->where('category_slug', $category_slug)->orWhereIn('id', $allSubCategories->pluck('id')->toArray());
            });
        }

        $products = $products->get();
        return view('frontend.sub_category.index', compact('products', 'selectedCategory', 'allSubCategories'));
    }


    //ADD CART 
    public function addCart()
    {
        return view('frontend.add_cart.add_cart');
    }
}
