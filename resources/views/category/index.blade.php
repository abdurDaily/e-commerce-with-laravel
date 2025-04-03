@extends('backend_layouts')
@section('backend_contains')
@push('backend_css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
    <style>
         .toast-success {
            background-color: #28a745 !important; /* Green color for success */
            color: white !important;
            z-index: 100 !important;
        }
        .toast-warning{
            background-color: #ffc107 !important; /* Yellow color for warning */
            color:#fff !important
        }
    </style>
@endpush

<section>
    <div class="header d-flex justify-content-between align-items-center bg-light py-3 px-4">
        <h4 class="m-0">Category Records:</h4>
        <div class="btn-collection">
            <a id="category_modal" href="{{ route('backend.category.category') }}" class="btn btn-primary">Category</a>
            <a href="#" class="btn btn-primary">Sub Category</a>
        </div>
    </div>

    <div class="table-responsive table-content my-2">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Image</th>
                <th>Sub Category Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>#</td>
                <td>Category Name</td>
                <td>Image</td>
                <td>Sub Category Name</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
        </table>
    </div>
</section>
@endsection



@push('backend_js')
<script src="{{ asset('backend/assets/js/bootbox.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>
<script>
    $(document).ready(function(){
        let dialog = ''

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
                    toastr.warning(xhr.responseJSON.errors.category_name, 'success')
                    toastr.warning(xhr.responseJSON.errors.category_img, 'success')
                    // console.log();
                    $('.category_name_err').text(xhr.responseJSON.errors.category_name);
                    $('.category_img_err').text(xhr.responseJSON.errors.category_name);
                }
            });
        });
});


    
</script>
@endpush