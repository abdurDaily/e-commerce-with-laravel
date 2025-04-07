<form id="productForm" action="{{ route('backend.product.product.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
    @csrf

    <div class="row">
        <!-- Product Title -->
        <div class="col-xl-12 mb-3">
            <label for="product_title">Product Name:</label>
            <input name="product_title" type="text" class="form-control p-3" placeholder="Product name">
            <span class="text-danger product_title_err"></span>
        </div>

        <!-- Product Price -->
        <div class="col-xl-6 mb-3">
            <label for="product_price">Product Price:</label>
            <input name="product_price" type="text" class="form-control p-3" placeholder="Product price">
            <span class="text-danger product_price_err"></span>
        </div>

        <!-- Discount Price -->
        <div class="col-xl-6 mb-3">
            <label for="product_discount_price">Discount Price:</label>
            <input name="product_discount_price" type="text" class="form-control p-3" placeholder="Discount price">
            <span class="text-danger product_discount_price_err"></span>
        </div>

        <!-- Stock -->
        <div class="col-xl-6 mb-3">
            <label>Stock Status:</label><br>
            <div class="form-check form-check-inline">
                <input value="1" class="form-check-input" type="radio" name="product_stock" id="stock">
                <label class="form-check-label" for="stock">Stock</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="0" class="form-check-input" type="radio" name="product_stock" id="not_stock">
                <label class="form-check-label" for="not_stock">Not in Stock</label>
            </div>
            <span class="text-danger product_stock_err"></span>
        </div>

        <!-- Status -->
        <div class="col-xl-6 mb-3">
            <label>Product Status:</label><br>
            <div class="form-check form-check-inline">
                <input value="1" class="form-check-input" type="radio" name="product_status" id="active">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input value="0" class="form-check-input" type="radio" name="product_status" id="inactive">
                <label class="form-check-label" for="inactive">Inactive</label>
            </div>
            <span class="text-danger product_status_err"></span>
        </div>

        <!-- Category -->
        <div class="col-xl-12 mb-3">
            <label for="category_id">Select Category</label>
            <select class="form-control js-example-basic-single w-100" name="category_id">
                <option value="" disabled selected>Select category</option>
                {{-- @foreach ($subCategories as $subCategory)
                    <option value="{{ $subCategory->id }}">{{ $subCategory->sub_category_title ?? $subCategory->category_title }}</option>
                @endforeach --}}
            </select>
            <span class="text-danger product_category_err"></span>
        </div>

        <!-- Key Features -->
        <div class="col-xl-12 mb-3">
            <label>Key Features</label>
            <div id="feature-wrapper">
                <div class="input-group mb-2">
                    <input type="text" name="product_features[]" class="form-control p-3" placeholder="Enter feature">
                    <button type="button" class="btn btn-danger remove-feature">Remove</button>
                </div>
            </div>
            <button type="button" id="add-feature" class="btn btn-primary mt-2">Add New</button>
        </div>

        <div class="col-xl-12">
            <label for="product_details">product details</label>
            <textarea class="form-control" placeholder="product details...." name="product_details" id="product_details" cols="30" rows="5"></textarea>
        </div>


        <div class="col-xl-12">
            <label for="product_img">select a product image</label>
            {{-- <input type="file" class="form-control p-3" id="product_img"> --}}
            <input type="file" name="product_img" class="form-control p-3" id="product_img">
            <span class="text-danger product_img_err"></span>
        </div>
        <!-- Submit -->
        <div class="col-xl-12 mt-4">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
        </div>
    </div>
</form>
