@extends('backend_layouts')
@section('backend_contains')
@push('backend_css')
<link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .toast-success {
        background-color: #28a745 !important;
        /* Green color for success */
        color: white !important;
        z-index: 100 !important;
    }

    .toast-warning {
        background-color: #ff0000bc !important;
        /* Yellow color for warning */
        color: #fff !important
    }

    /* Make select2 box look like Bootstrap's .form-control */
    .select2-container--default .select2-selection--single {
        height: 55px;
        /* match your input height if it's p-3 */
        padding: 10px 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        background-color: #fff;
        font-size: 16px;
        line-height: 1.5;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #495057;
        line-height: 35px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
        right: 10px;
    }

    .select2-container {
        width: 100% !important;
    }
</style>
@endpush

@push('search')
<form action="index.html#">
    <div class="search_field">
        <input type="text" id="categorySearch" placeholder="Search here...">
    </div>
    <button type="submit"> <img
            src="{{ asset('backend/assets/img/icon/icon_search.svg') }} " alt="">
    </button>
</form>
@endpush

<section>
    <div class="header d-flex justify-content-between align-items-center bg-light py-3 px-4">
        <h4 class="m-0">Category Records:</h4>
        <div class="btn-collection">
            <a id="category_modal" href="{{ route('backend.category.category') }}" class="btn btn-primary">Category</a>
            <a  href="{{ route('backend.category.sub.category') }}" class="btn btn-primary sub_category_modal">Sub
                Category</a>
        </div>
    </div>

    <div class="table-responsive table-content my-2">
        <table class="table table-striped table-hover table-bordered">
            <tr class="text-center">
                <th>#</th>
                <th>Category Name</th>
                <th>Image</th>
                <th>Sub Category Name</th>
                <th>Action</th>
            </tr>
            @forelse ($categories as $category)
            <tr class="text-center align-middle">
                <td class="align-middle">{{ $categories->firstItem() + $loop->index }}</td>

                {{-- Main Category Title --}}
                <td class="align-middle">
                    <div class="d-flex align-items-center justify-content-center">
                        {{ $category->category_title }}
                        &nbsp;
                        <a href="{{ route('backend.category.category.edit', $category->id) }}" id="category_modal"
                            style="line-height: 0; color:#26184d;">
                            <iconify-icon icon="mingcute:pen-line" width="20" height="20"></iconify-icon>
                        </a>
                    </div>
                </td>

                {{-- Category Image --}}
                <td class="align-middle">
                    <img style="width: 60px" src="{{ $category->category_img }}" alt="">
                </td>

                {{-- Sub Category Titles --}}
                <td  class="align-middle">
                    @if($category->subcategories->count())
                    <ul class="mb-0 list-unstyled">
                        @foreach($category->subcategories as $sub)
                        <li class="py-1">{{ $sub->sub_category_title }} 
                            &nbsp;
                            <a href="{{ route('backend.category.sub.category.edit', $sub->id) }}" class="sub_category_edit" style="line-height: 0; color:#26184d;">
                                <iconify-icon icon="mingcute:pen-line" width="18" height="18"></iconify-icon>
                            </a>
                            
                            
                             
                            &nbsp;
                            {{-- <a class="text-danger sub_category_modal" href="{{ route('backend.category.category.edit', $category->id) }}" 
                                style="line-height: 0; color:#26184d;">
                                <iconify-icon icon="ic:outline-delete" width="18" height="18"></iconify-icon>
                            </a>     --}}
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <span class="text-muted">No Subcategories</span>
                    @endif
                </td>

         

                {{-- Action --}}
                <td class="align-middle">
                    <a href="{{ route('backend.category.category.delete',$category->id ) }}"
                        class="text-danger delete_category">
                        <iconify-icon icon="tdesign:delete" width="20" height="20"></iconify-icon>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-danger fw-bold">No records found!</td>
            </tr>
            @endforelse

        </table>
        <div class="d-flex justify-content-center my-3">
            {{ $categories->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>
@endsection



@push('backend_js')
<script src="{{ asset('backend/assets/js/bootbox.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/iconify-icon.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        let dialog = '';

        // FOR SHOW MODAL
        $(document).on('click', '#category_modal', function(e){
            e.preventDefault();

            let categoryURL = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: categoryURL,
                success: function (response) {
                     dialog = bootbox.dialog({
                        title: 'Insert a New Category...',
                        message: "<div class='modal_content'></div>",
                        size: 'large',
                        centerVertical: true,
                    });
                    $('.modal_content').html(response)
                }
            });
        });

        // FOR SUBMITTING OR INSERTING CATEGORY DATA 
        $(document).on('submit','#categoryForm', function (e) {
            e.preventDefault();
            let categoryFormData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ route('backend.category.category.store') }}",
                data: categoryFormData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                    
                    if(response.status == 200){
                        dialog.modal('hide');
                        $('.table-content table').load(location.href + ' .table-content table');
                        toastr.success('category inserted successfully!', 'success')
                    }
                },
                error: function (xhr) {
                    toastr.warning(xhr.responseJSON.errors.category_name,'Error!')
                    toastr.warning(xhr.responseJSON.errors.category_img,'Error!')
                    // console.log();
                    $('.category_name_err').text(xhr.responseJSON.errors.category_name);
                    $('.category_img_err').text(xhr.responseJSON.errors.category_name);
                }
            });
        });

        // CATEGORY IMAGE PREVIEW 
        $(document).on('change', '#category_img', function (e) {
            e.preventDefault();
            
            let file = this.files[0];
            let reader = new FileReader();

            reader.onload = function(e){
              $('.category_img_preview').attr('src',e.target.result);
            }
            reader.readAsDataURL(file);
        });

        // CATEGORY UPDATE 
        $(document).on('submit', '#categoryEditForm', function (e) {
            e.preventDefault();
            let categoryFormData = new FormData(this);
            categoryFormData.append('_method', 'PUT');

            let updateURL = $(this).attr('action'); // Get the form action URL correctly

            $.ajax({
                type: "POST",  // Still using POST because Laravel detects PUT via _method
                url: updateURL, 
                data: categoryFormData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 200) {
                        toastr.success('Category updated successfully!', 'Success');
                        dialog.modal('hide');
                        $('.table-content').load(location.href + ' .table-content'); // Refresh table
                    }
                },
                error: function (xhr) {
                    if (xhr.responseJSON.errors) {
                        $('.category_name_err').text(xhr.responseJSON.errors.category_name || '');
                        $('.category_img_err').text(xhr.responseJSON.errors.category_img || '');
                        toastr.warning('Please check the form for errors.', 'Error!');
                    }
                }
            });
        });


        // DELETE CATEGORY 
        $(document).on('click', '.delete_category', function (e) {
            e.preventDefault();

            let categoryDeleteURL = $(this).attr('href'); // Get the delete route
            let row = $(this).closest('tr'); // Get the row to remove

            bootbox.confirm({
                message: "<h4>Are you sure you want to delete this category?</h4>",
                buttons: {
                    confirm: { label: 'Yes', className: 'btn-success' },
                    cancel: { label: 'No', className: 'btn-danger' }
                },
                callback: function (result) {
                    if (result) {  // ✅ Only execute if the user clicks "Yes"
                        $.ajax({
                            type: "DELETE",
                            url: categoryDeleteURL,
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            success: function (response) {
                                if (response.success) {
                                    toastr.success('Category deleted successfully!', 'Success');

                                    // Fade out and remove the row smoothly
                                    row.fadeOut(500, function () {
                                        $(this).remove();

                                        // If the table is empty after deletion, reload the table section
                                        if ($('.table-content table tbody tr').length === 0) {
                                            $('.table-content').load(location.href + ' .table-content > *');
                                        }
                                    });
                                } else {
                                    toastr.warning(response.message || 'Error deleting category.', 'Warning!');
                                }
                            },
                            error: function (xhr) {
                                toastr.error('Something went wrong!', 'Error');
                                console.error(xhr.responseText); // Debugging
                            }
                        });
                    } 
                    // ✅ If user clicks "No", do nothing
                }
            });
        });

        // SUB CATEGORY FORM  MODAL
        $(document).on('click', '.sub_category_modal', function (e) {
            e.preventDefault();

            let subCategoryURL = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: subCategoryURL,
                success: function (response) {
                    dialog = bootbox.dialog({
                        title: 'sub category form',
                        message: "<div class='sub_category_content'></div>",
                        size: 'large',
                        centerVertical: true,
                    });

                    $('.sub_category_content').html(response);

                    $('.js-example-basic-single').select2({
                            dropdownParent: $('.bootbox') // Required for proper dropdown inside modals
                        });
                }
            });
        });



       // SUB CATEGORY FORM 
        $(document).on('click', '.sub_category_edit', function (e) {
            e.preventDefault();
            let subCategoryURL = $(this).attr('href');

            console.log('Clicked sub-category edit, URL:', subCategoryURL); // 🐞 Debug

            $.ajax({
                type: "GET",
                url: subCategoryURL,
                success: function (response) {
                    console.log('AJAX success. Response loaded.'); // 🐞 Debug

                    dialog = bootbox.dialog({
                        title: 'Edit Sub Category',
                        message: "<div class='sub_category_content'></div>",
                        size: 'large',
                        centerVertical: true,
                    });

                    $('.sub_category_content').html(response);

                    // In case select2 is needed inside modal
                    $('.js-example-basic-single').select2({
                        dropdownParent: $('.bootbox')
                    });
                },
                error: function (xhr) {
                    console.error('AJAX Error:', xhr);
                    toastr.error('Could not load subcategory form.', 'Error');
                }
            });
        });



        // SUB-CATEGORY STORE 
        $(document).on('submit', '#subCategoryForm', function (e) {
            e.preventDefault();

            let form = $(this);
            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ route('backend.category.sub.category.store') }}", // Make sure this route exists
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 200) {
                        toastr.success(response.message, 'Success');

                        // ✅ CLOSE MODAL
                        bootbox.hideAll();

                        // ✅ Optional: reload or refresh table
                        $('.table-content').load(location.href + ' .table-content > *');
                    }
                },
                error: function (xhr) {
                    if (xhr.responseJSON?.errors) {
                        $('.category_name_err').text(xhr.responseJSON.errors.sub_category_name || '');
                        toastr.warning('Please check the form for errors.', 'Warning!');
                    }
                }
            });
        });


        // SUB-CATEGORY UPDATE
        $(document).on('submit', '#subCategoryUpdateForm', function (e) {
            e.preventDefault();

            let subFormData = new FormData(this);
            subFormData.append('_method', 'PUT'); // Laravel will interpret it as PUT

            let subUpdateURL = $(this).attr('action'); // Get action URL from form

            $.ajax({
                type: "POST", // still use POST with _method
                url: subUpdateURL,
                data: subFormData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status === 200) {
                        toastr.success(response.message, 'Success');
                        dialog.modal('hide');

                        // Refresh only the table
                        $('.table-content').load(location.href + ' .table-content > *');
                    }
                },
                error: function (xhr) {
                    if (xhr.responseJSON?.errors) {
                        $('.sub_category_name_err').text(xhr.responseJSON.errors.sub_category_name || '');
                        toastr.warning('Please check the form for errors.', 'Warning!');
                    }
                }
            });
        });


        // CATEGORY + SUBCATEGORY SEARCH
        $(document).on('keyup', '#categorySearch', function () {
            let searchValue = $(this).val().toLowerCase();

            $('.table-content table tbody tr').filter(function () {
                $(this).toggle(
                    $(this).text().toLowerCase().indexOf(searchValue) > -1
                );
            });
        });



});


    
</script>
@endpush