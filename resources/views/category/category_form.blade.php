<form id="categoryForm" action="{{ route('backend.category.category.store') }}" method="post"
    enctype="multipart/form-data" class="p-4">
    @csrf

    <label for="category_name">Category name:</label>
    <input name="category_name" type="text" placeholder="category name" class="form-control p-3 mb-1">
    <span class="category_name_err text-danger"></span> <br>

    <label for="category_img">select an image</label>
    <input name="category_img" id="category_img" type="file" accept=".png,.jpg,.webp,jpeg"
        class="form-control p-3 mb-1">
    <span class="category_img_err text-danger"></span> <br>

    <div class="img my-2">
        <img style="width:200px;" class="category_img_preview " src="" alt="">
    </div>

    <button class="btn btn-primary" type="submit">submit</button>
    <button class="btn btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
</form>