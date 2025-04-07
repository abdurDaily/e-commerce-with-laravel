<?php

namespace App\Http\Controllers\backend\product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //INDEX 
    public function index(){
        $categories = Category::whereNotNull('sub_category_title')->get();
        return view('product.index');
    }

    //PRODUCT INSERT FORM 
    public function product(){
        return view('product.product_form');
    }

    // STORE 
    public function productStore(Request $request){
        $request->validate([
            'product_title' => 'required',
            'product_img' => 'required',
            'product_price' => 'required',
            'category_id' => 'required',
        ]);

        $productStore = new Product();
        $productStore->product_title = $request->product_title;
        $productStore->product_slug = Str::slug($request->product_title);
        $productStore->product_code = Str::random(10);
        $productStore->product_price = $request->product_price;
        $productStore->discount_price = $request->product_discount_price;
        $productStore->product_stock = $request->product_stock;
        $productStore->product_status = $request->product_status;
        $productStore->category_id = $request->category_id;
        $productStore->product_features = $request->product_features;
        $productStore->product_details = $request->product_details;
        $productStore->product_details = $request->product_details;

        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('storage/products/', $filename, 'public');
            $productStore->product_img = $path;
        }

        
        $productStore->save();

        return response()->json([
            'status' => 200,
            'message' => 'Product Inserted Successfully!',
        ]);
    }
}
