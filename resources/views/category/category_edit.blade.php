<form id="categoryEditForm" action="{{ route('backend.category.category.update', $editCategory->id) }}" method="post"
    enctype="multipart/form-data" class="p-4">
    @csrf
    @method('put')

    <label for="category_name">Category name:</label>
    <input name="category_name" value="{{ $editCategory->category_title }}" type="text" placeholder="category name" class="form-control p-3 mb-1">
    <span class="category_name_err text-danger"></span> <br>

    <label for="category_img">select an image</label>
    <input name="category_img" id="category_img" type="file" accept=".png,.jpg,.webp,jpeg"
        class="form-control p-3 mb-1">
    <span class="category_img_err text-danger"></span> 

    <div class="img my-2">
        <img style="width:200px;" class="category_img_preview " src="{{ $editCategory->category_img }}" alt="">
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
    <button class="btn btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
</form>