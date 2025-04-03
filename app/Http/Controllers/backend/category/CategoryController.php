<?php

namespace App\Http\Controllers\backend\category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index
    public function index(){
        return view('category.index');
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
}
