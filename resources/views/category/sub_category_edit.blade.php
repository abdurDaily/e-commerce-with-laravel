<form id="subCategoryUpdateForm" action="{{ route('backend.category.sub.category.update',$subCategory->id) }}" method="post" enctype="multipart/form-data" class="p-4">
    @csrf
    @method('put')

    <select class="js-example-basic-single form-control w-100" name="parent_id">
        <option value="" selected disabled>select a parent category</option>

        @foreach ($categories as $category)
        <option {{ $subCategory->parent_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
            {{ $category->category_title }}
        </option>
        @endforeach


        {{-- <option value="" selected>111111</option> --}}
    </select>



    <label for="sub_category_name" class="mt-3">sub category name:</label>
    <input value="{{ $subCategory->sub_category_title }}" name="sub_category_name" type="text"
        placeholder="category name" class="form-control p-3 mb-1">
    <span class="sub_category_name_err text-danger"></span> <br>



    <button class="btn btn-primary" type="submit">update</button>
    <button class="btn btn-danger" data-bs-dismiss="modal" type="button">cancel</button>
</form>