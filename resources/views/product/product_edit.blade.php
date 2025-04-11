<form id="productEditForm" action="{{ route('backend.product.product.update', $edit_product->id) }}" method="POST" enctype="multipart/form-data" class="p-4">
    @csrf
    @method('PUT')

    <div class="row">
        <!-- Product Title -->
        <div class="col-xl-12 mb-3">
            <label for="product_title">Product Name:</label>
            <input value="{{ old('product_title', $edit_product->product_title) }}" name="product_title" type="text" class="form-control p-3" placeholder="Product name">
            <span class="text-danger product_title_err"></span>
        </div>

        <!-- Product Price -->
        <div class="col-xl-6 mb-3">
            <label for="product_price">Product Price:</label>
            <input value="{{ old('product_price', $edit_product->product_price) }}" name="product_price" type="text" class="form-control p-3" placeholder="Product price">
            <span class="text-danger product_price_err"></span>
        </div>

        <!-- Discount Price -->
        <div class="col-xl-6 mb-3">
            <label for="product_discount_price">Discount Price:</label>
            <input value="{{ old('product_discount_price', $edit_product->discount_price) }}" name="product_discount_price" type="text" class="form-control p-3" placeholder="Discount price">
            <span class="text-danger product_discount_price_err"></span>
        </div>

        <!-- Stock -->
        <div class="col-xl-6 mb-3">
            <label>Stock Status:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_stock" id="stock" value="1" {{ $edit_product->product_stock == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="stock">Stock</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="product_stock" id="not_stock" value="0" {{ $edit_product->product_stock == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="not_stock">Not in Stock</label>
            </div>
            <span class="text-danger product_stock_err"></span>
        </div>

        <!-- Status -->
        <div class="col-xl-6 mb-3">
            <label>Product Status:</label><br>
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input" 
                    type="radio" 
                    name="product_status" 
                    id="active" 
                    value="1" 
                    {{ (int) $edit_product->product_status === 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input" 
                    type="radio" 
                    name="product_status" 
                    id="inactive" 
                    value="0" 
                    {{ (int) $edit_product->product_status === 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="inactive">Inactive</label>
            </div>
            <span class="text-danger product_status_err"></span>
        </div>
        

        <!-- Category -->
        <div class="col-xl-12 mb-3">
            <label for="category_id">Select Category</label>
            <select class="form-control js-example-basic-single w-100" name="category_id">
                <option value="" disabled>Select category</option>
                @foreach ($subCategoris as $subCategory)
                    <option value="{{ $subCategory->id }}" {{ $edit_product->category_id == $subCategory->id ? 'selected' : '' }}>
                        {{ $subCategory->sub_category_title ?? $subCategory->category_title }}
                    </option>
                @endforeach
            </select>
            <span class="text-danger product_category_err"></span>
        </div>

        <!-- Key Features -->
        <div class="col-xl-12 mb-3">
            <label>Key Features</label>
            <div id="feature-wrapper">
                @if (!empty($edit_product->product_features))
                    @foreach ($edit_product->product_features as $feature)
                        <div class="input-group mb-2">
                            <input type="text" name="product_features[]" class="form-control p-3" value="{{ $feature }}" placeholder="Enter feature">
                            <button type="button" class="btn btn-danger remove-feature">Remove</button>
                        </div>
                    @endforeach
                @else
                    <div class="input-group mb-2">
                        <input type="text" name="product_features[]" class="form-control p-3" placeholder="Enter feature">
                        <button type="button" class="btn btn-danger remove-feature">Remove</button>
                    </div>
                @endif
            </div>
            <button type="button" id="add-feature" class="btn btn-primary mt-2">Add New</button>
        </div>
        

        <!-- Product Details -->
        <div class="col-xl-12 mb-3">
            <label for="product_details">Product Details</label>
            <textarea class="form-control" name="product_details" id="product_details" cols="30" rows="5" placeholder="Product details...">{{ old('product_details', $edit_product->product_details) }}</textarea>
        </div>

        <!-- Product Image -->
        <div class="col-xl-12 mb-3">
            <label for="product_img">Select a Product Image</label>
            <input type="file" name="product_img" class="form-control p-3 product_img" id="product_img">
            @if ($edit_product->product_img)
                <img style="width: 200px; margin-top:20px;" id="product_img_preview" src="{{ asset($edit_product->product_img) }}" alt="">
            @endif
            <span class="text-danger product_img_err"></span>
        </div>

        <!-- Submit Buttons -->
        <div class="col-xl-12 mt-2">
            <button class="btn btn-primary" type="submit">Update</button>
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
</form>
