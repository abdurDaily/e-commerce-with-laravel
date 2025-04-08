<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 5);
    
        // Get only parent categories (main)
        $categories = Category::whereNull('parent_id') // Main categories only
                              ->with('subcategories')   // Eager load subcategories
                              ->latest()
                              ->paginate($perPage);
    
        return view('category.index', compact('categories'));
    }
    
    

    //CATEGORY CREATE 
    public function category(){
        return view('category.category_form');
    }


    // STORE CATEGORY DATA 
    public function categoryStore(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_img' => 'required',
        ]);

        $categoryData = new Category();
        $categoryData->category_title = $request->category_name;

        if($request->file('category_img')){
            $file = $request->file('category_img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('storage/category/', $fileName);
        }
        $categoryData->category_img = env('APP_URL') . 'storage/category/' . $fileName;
        $categoryData->save();

        return response()->json([
            'status' => 200,
            'message' => 'Category Added Successfully',
        ]);
    }


    // CATEGORY EDIT 
    public function categoryEdit($id){
        $editCategory = Category::find($id);
        return view('category.category_edit', compact('editCategory'));
    }

    
    //UPDATE CATEGORY 
    public function categoryUpdate(Request $request, $id){
        $request->validate([
            'category_name' => 'required',
        ]);

        $categoryData = Category::find($id);
        $categoryData->category_title = $request->category_name;

        if($request->file('category_img')){
            $file = $request->file('category_img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('storage/students/', $fileName);
            $categoryData->category_img = env('APP_URL') . 'storage/students/' . $fileName;
        }
        $categoryData->save();

        return response()->json([
            'status' => 200,
            'message' => 'Category Added Successfully',
        ]);
    }


    //DELETE CATEGORY 
    public function categoryDelete($id){
        $deleteCategory = Category::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'category deleted!'
        ]);
    }


    //SUB-CATEGORY 
    public function subCategory(){
        $subCategories = Category::select('id','category_title','parent_id')->whereNotNull('category_title')->get();
        return view('category.sub_category_form', compact('subCategories'));
    }

    //SUB CATEGORY STORE 
    public function subCategoryStore(Request $request){
        $request->validate([
            'parent_id' => 'required',
            'sub_category_name' => 'required',
        ]);

        $subCategory = new Category();
        $subCategory->parent_id = $request->parent_id;
        $subCategory->sub_category_title = $request->sub_category_name;
        $subCategory->save();

        return response()->json([
            'status' => 200,
            'message' => 'sub category inserted successfully!'
        ]);
    }


    // SUB CATEGORY EDIT 
    public function subCategoryEdit($id){
        $subCategory = Category::find($id);
        $categories = Category::whereNull('parent_id') // Main categories only
        ->latest()->get();
        return view('category.sub_category_edit',compact('subCategory','categories') ); 
    }

    //SUB CATEGORY UPDATE 
    public function subCategoryUpdate(Request $request, $id){
        $request->validate([
            'parent_id' => 'required',
            'sub_category_name' => 'required',
        ]);

        $subCategory = Category::find($id);
        $subCategory->parent_id = $request->parent_id;
        $subCategory->sub_category_title = $request->sub_category_name;
        $subCategory->save();

        return response()->json([
            'status' => 200,
            'message' => 'sub category inserted successfully!'
        ]);
    }
}
