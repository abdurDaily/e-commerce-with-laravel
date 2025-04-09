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
            <button type="submit"> <img src="{{ asset('backend/assets/img/icon/icon_search.svg') }} " alt="">
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
                    <th>Details</th>
                    <th>Action</th>
                </tr>

                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $products->firstItem() + $loop->index }}</td>
                        <td>{{ $product->product_title }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>
                            <img style="width:80px;" src="{{ $product->product_img }}" alt="">
                        </td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>{{ $product->product_stock == 1 ? 'stock' : 'not stock' }}</td>
                        <td>{{ $product->product_status == 'active' ? 'active' : 'inactive' }}</td>
                        <td>{{ $product->category->sub_category_title }}</td>
                        <td>
                            @php
                                $features = json_decode($product->product_features, true);
                            @endphp

                            @if (is_array($features))
                                <ul class="list-unstyled mb-0 ps-3">
                                    @foreach ($features as $feature)
                                        <li>&#8226; {{ $feature }}</li> <!-- Bullet point -->
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>




                        <td>{{ $product->product_details }}</td>
                        <td class="text-center">

                            &nbsp;&nbsp;

                            <a href="" class="sub_category_edit d-inline-block mb-4"
                                style="line-height: 0; color:#26184d;">
                                <iconify-icon icon="mingcute:pen-line" width="18" height="18"></iconify-icon>
                            </a>

                            &nbsp;&nbsp;

                            <a href="{{ route('backend.product.product.delete', $product->id) }}" class="text-danger delete_product">
                                <iconify-icon icon="tdesign:delete" width="20" height="20"></iconify-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach

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
        $(document).ready(function() {
            let dialog = '';

            // FOR SHOW MODAL
            $(document).on('click', '#product_modal', function(e) {
                e.preventDefault();

                let categoryURL = $(this).attr('href');

                $.ajax({
                    type: "GET",
                    url: categoryURL,
                    success: function(response) {
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

            // ✅ Add new feature input
            $(document).on('click', '#add-feature', function() {
                $('#feature-wrapper').append(`
                    <div class="input-group mb-2">
                        <input type="text" name="product_features[]" class="form-control p-3" placeholder="Enter feature">
                        <button type="button" class="btn btn-danger remove-feature">Remove</button>
                    </div>
                `);
            });

            // ✅ Remove a feature input
            $(document).on('click', '.remove-feature', function() {
                $(this).closest('.input-group').remove();
            });

            // ✅ PRODUCT STORE FORM SUBMIT
            $(document).on('submit', '#productForm', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "{{ route('backend.product.product.store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 200) {
                            dialog.modal('hide');
                            $('.table-content table').load(location.href +
                                ' .table-content table');
                            toastr.success('Product inserted successfully!', 'Success');
                        }
                    },
                    error: function(err) {
                        const errors = err.responseJSON.errors;

                        if (errors.product_title) {
                            $('input[name="product_title"]').addClass('is-invalid');
                            $('.product_title_err').text(errors.product_title[0]);
                        }

                        if (errors.product_img) {
                            $('input[name="product_img"]').addClass('is-invalid');
                            $('.product_img_err').text(errors.product_img[0]);
                        }

                        if (errors.product_price) {
                            $('input[name="product_price"]').addClass('is-invalid');
                            $('.product_price_err').text(errors.product_price[0]);
                        }

                        if (errors.category_id) {
                            $('select[name="category_id"]').addClass('is-invalid');
                            $('.product_category_err').text(errors.category_id[0]);
                        }
                    }
                });
            });

            // ✅ CLEAR ERROR WHEN USER TYPING OR SELECTING

            $(document).on('input', 'input[name="product_title"]', function() {
                $(this).removeClass('is-invalid');
                $('.product_title_err').text('');
            });

            $(document).on('change', 'input[name="product_img"]', function() {
                $(this).removeClass('is-invalid');
                $('.product_img_err').text('');
            });

            $(document).on('input', 'input[name="product_price"]', function() {
                $(this).removeClass('is-invalid');
                $('.product_price_err').text('');
            });

            $(document).on('change', 'select[name="category_id"]', function() {
                $(this).removeClass('is-invalid');
                $('.product_category_err').text('');
            });


            //PRODUCT IMAGE PREVIEW 
            $(document).on('change', '.product_img', function(e) {
                e.preventDefault();

                let file = this.files[0];
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#product_img_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            });


            //DELETE PRODUCT 
            $(document).on('click', '.delete_product', function(e) {
                e.preventDefault();

                let productDeleteURL = $(this).attr('href');
                let row = $(this).closest('tr');

                bootbox.confirm({
                    message: "<h4>are you really want to delete this product item?</h4>",
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                       if(result){
                        $.ajax({
                            type: "DELETE",
                            url: productDeleteURL,
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            success: function (response) {
                                if(response.status){
                                    row.remove();
                                    toastr.success('This product has been deletede!', 'Delete')
                                }
                            },
                            error: function (xhr) {
                                toastr.warning('something went wrong , Error!')
                            }
                        });
                       }
                    }
                });
            })

        });
    </script>
@endpush
