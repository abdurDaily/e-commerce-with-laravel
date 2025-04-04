<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index
    public function index(Request $request){
        $perPage = $request->input('per_page', 5); // Default 10 items per page
        $categories = Category::latest()->paginate($perPage);
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
            $file->move('storage/students/', $fileName);
        }
        $categoryData->category_img = env('APP_URL') . 'storage/students/' . $fileName;
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
}
