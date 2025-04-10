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
    public function index()
    {
        $products = Product::with('category')->latest()->simplePaginate(5);
        return view('product.index', compact('products'));
    }


    //PRODUCT INSERT FORM 
    public function product(){
        $subCategoris = Category::select('id', 'sub_category_title')->whereNotNull('sub_category_title')->get();

        return view('product.product_form', compact('subCategoris'));
    }

    // STORE 
    public function productStore(Request $request)
    {
        // Validate inputs
        $request->validate([
            'product_title' => 'required|string|max:255',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif',
            'product_price' => 'required|numeric',
            'category_id' => 'required|integer',
        ]);
    
        // Create new product instance
        $productStore = new Product();
    
        $productStore->product_title = $request->product_title;
        $productStore->product_slug = Str::slug($request->product_title);
        $productStore->product_code = Str::upper(Str::random(10));
        $productStore->product_price = $request->product_price;
        $productStore->discount_price = $request->product_discount_price ?? null;
        $productStore->product_stock = $request->product_stock ?? 1;
        $productStore->product_status = $request->product_status ?? 1;
        $productStore->category_id = $request->category_id;
        $productStore->product_details = $request->product_details ?? null;
    
        // Encode features array to JSON if present
        if ($request->has('product_features')) {
            $productStore->product_features = json_encode($request->product_features);
        }
    
        // Handle image upload
        if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move(public_path('storage/product'), $fileName);
            $productStore->product_img = asset('storage/product/' . $fileName);
        }
    
        // Save product
        $productStore->save();
    
        // Return success response
        return response()->json([
            'status' => 200,
            'message' => 'Product Inserted Successfully!',
        ]);
    }

    // DELETE PRODUCT 
    public function productDelete($id){
        $product = Product::find($id)->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Product Deleted Successfully!',
        ]);
    }


    //PRODUCT EDIT 
    public function productEdit($id){
        $edit_product = Product::find($id);
        // dd($edit_product);
        return view('product.product_edit', compact('edit_product'));
    }
}
