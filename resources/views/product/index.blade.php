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
        <h4 class="m-0">Product Records:</h4>
        <div class="btn-collection">
            <a id="product_modal" href="{{ route('backend.product.product') }}" class="btn btn-primary">Add Product</a>
            
        </div>
    </div>

    <div class="table-responsive table-content my-2">
        <table class="table table-striped table-hover table-bordered">
            <tr class="text-center">
                <th>#</th>
                <th>Title</th>
                <th>Code</th>
                <th>Image</th>
                <th>Price</th>
                <th>Discount Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Category</th>
                <th>Features</th>
                <th>Qsn</th>
                <th>Review</th>
                <th>Action</th>
            </tr>

        </table>
        {{-- <div class="d-flex justify-content-center my-3">
            {{ $categories->links('pagination::bootstrap-5') }}
        </div> --}}

    </div>
</section>
@endsection



@push('backend_js')
<script src="{{ asset('backend/assets/js/bootbox.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/iconify-icon.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function () {
        let dialog = '';

        // FOR SHOW MODAL
        $(document).on('click', '#product_modal', function (e) {
            e.preventDefault();

            let categoryURL = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: categoryURL,
                success: function (response) {
                    dialog = bootbox.dialog({
                        title: 'Add a new product.',
                        message: "<div class='modal_content'></div>",
                        size: 'large',
                        centerVertical: true,
                    });

                    $('.modal_content').html(response);

                    // Re-initialize Select2
                    $('.js-example-basic-single').select2({
                        dropdownParent: $('.bootbox')
                    });
                }
            });
        });

        // ✅ Add new feature input (Delegated!)
        $(document).on('click', '#add-feature', function () {
            $('#feature-wrapper').append(`
                <div class="input-group mb-2">
                    <input type="text" name="product_features[]" class="form-control" placeholder="Enter feature">
                    <button type="button" class="btn btn-danger remove-feature">Remove</button>
                </div>
            `);
        });

        // ✅ Remove a feature input (Delegated!)
        $(document).on('click', '.remove-feature', function () {
            $(this).closest('.input-group').remove();
        });
    });
</script>


@endpush