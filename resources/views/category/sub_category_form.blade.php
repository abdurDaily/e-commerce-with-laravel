<form id="subCategoryForm" action="{{ route('backend.category.sub.category.store') }}" method="post" enctype="multipart/form-data" class="p-4">
    @csrf

    <select class="js-example-basic-single form-control w-100" name="parent_id">
        <option value="" selected disabled>select a parent category</option>

        @foreach ($subCategories as $subCategory)
            <option value="{{ $subCategory->id }}">{{ $subCategory->category_title }}</option>
        @endforeach

    </select>



    <label for="sub_category_name" class="mt-3">sub category name:</label>
    <input name="sub_category_name" type="text" placeholder="category name" class="form-control p-3 mb-1">
    <span class="sub_category_name_err text-danger"></span> <br>



    <button class="btn btn-primary" type="submit">submit</button>
    <button class="btn btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
</form>