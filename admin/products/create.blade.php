@extends('admin.layout.app')
@section('title', 'Manage Product')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Product</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Product Manageemnt</li>
                </ol>
            </div>
            <div class="ms-auto">
                <a href="{{ route('products.index') }}" class="btn btn-primary rounded-2 px-4"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> PRODUCT LIST</a>
            </div>
        </div>

        <form action="{{ route('products.store') }}" method="POST" name="productForm" id="productForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-dolly fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Product Information
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Product name">
                                <p class="errors"></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="slug" id="slug" placeholder="Product Slug" readonly>
                                <p class="errors"></p>
                            </div>
                            <div class>
                                <label class="form-label">Short Description <span class="text-danger">*</span></label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="textarea form-control" name="shortdescription" id="shortdescription" placeholder="Enter text ..." rows="4"></textarea>
                                </div>
                                <p class="errors"></p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-box fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Inventory
                        </div>
                        <div class="card-body">
                            <div class="row mb-n3">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Cost Price (MRP) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="mrp" id="mrp" placeholder="Enter Cost Price">
                                        <p class="errors"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Selling Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="price" id="price" placeholder="Enter Selling Price">
                                        <p class="errors"></p>
                                    </div>
                                </div>
                                <small class="text-muted">To Show a reduced price, enter the product's original price in mrp price and enter a lower price into selling price on which amount you want to sell product. </small>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">SKU Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="skucode" id="skucode" placeholder="SKU Code">
                                        <p class="errors"></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Barcode</label>
                                        <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
                                        <p class="errors"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-file-image fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Product Image
                        </div>
                        <div class="card-body">
                            {{-- <div id="image" class="dropzone dz-clickable">
                                <div class="dz-message needsclick">    
                                    <br>Drop files here or click to upload.<br><br>                                            
                                </div>
                            </div> --}}

                            <div id="dropzone"> 
                                <div class="dropzone needsclick" id="imageUpload">
                                    <div class="dz-message needsclick">
                                        Drop files <b>here</b> or <b>click</b> to upload.<br />
                                        <span class="dz-note needsclick">
                                        (Please Upload <strong>JPG, PNG, JPEG, SVG</strong> image file only.)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="product-gallery"></div>
                        </div>
                    </div>
        
                    
        
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-search fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Description
                        </div>
                        <div class="card-body">
                            <div class="form-control p-0 overflow-hidden">
                                <textarea class="textarea form-control" name="description" id="description" placeholder="Enter text ..." rows="12"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-4">
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Product Status </div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="mb-3">
                                <label class="form-label">Product Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="status-select form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <p class="errors"></p>
                            </div>
                        </div>
                    </div>
        
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Product Category</div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="mb-3">
                                <label class="form-label">Select Category <span class="text-danger">*</span></label>
                                <select name="category" id="category" class="category-select form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <p class="errors"></p>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Select Sub Category <span class="form-text">(optional)</span></label>
                                <select name="subcategory" id="subcategory" class="subcategory-select form-control">
                                    <option value="">Select Category First</option>
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3 d-flex">
                            <div class="flex-1">
                                <div>Product Feature</div>
                            </div>
                        </div>
                        <div class="card-body fw-bold">
                            <div class="mb-3">
                                <label class="form-label">Product Feature <span class="form-text">(optional)</span></label>
                                <select name="feature" id="feature" class="status-select form-control">
                                    <option value="1">New Arrival</option>
                                    <option value="2" selected>Best Selling</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Product Brand <span class="form-text">(optional)</span></label>
                                <select name="brand" id="brand" class="status-select form-control">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-search fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Seo Content
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Meta Title</label>
                                <input type="text" class="form-control" name="metatitle" id="metatitle" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Meta Keyword</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="textarea form-control" name="metakeyword" id="metakeyword" placeholder="Enter text ..." rows="5"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Meta Description</label>
                                <div class="form-control p-0 overflow-hidden">
                                    <textarea class="textarea form-control" name="metadesc" id="metadesc" placeholder="Enter text ..." rows="9"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Create Product</button>
            </div>
        </form>
    </div>
@endsection
@section('custom-javascript')
<script>
    $(".status-select").select2({ minimumResultsForSearch: Infinity });
    $(".category-select").select2({ placeholder: "Select Category" });
    $(".subcategory-select").select2({ placeholder: "Select Sub Category" });
    //$(".multiple-select").select2({ placeholder: "Select Role" });
    $(document).ready(function() {
        $('#title').on('input', function() {
            var title = $(this).val().trim().toLowerCase();
            var slug = title.replace(/\s+/g, '-');   
            $('#slug').val(slug);
        });
    });
    //subcategory
    $(document).on("change","#category",function() {
        let categoryId = $(this).val();
        $.ajax({
            type: "GET",
            url: '{{ route('products.getsubcategory') }}',
            data: {'category_id': categoryId},
            dataType: "json",
            success: function (response) {
                $('#subcategory').find('option').not(":first").remove();
                $.each(response["subcategories"],function(key, item){
                    $('#subcategory').append(`<option value="${item.id}"> ${item.name} </option>`)
                });
            }
        });
    });
    //dropzone
    Dropzone.autoDiscover = false;    
    const dropzone = $("#imageUpload").dropzone({ 
        url:  "{{ route('temp.imagecreate') }}",
        maxFiles: 10,
        paramName: 'image',
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/svg",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, success: function(file, response){
            //$("#image_id").val(response.image_id);
            var imageHtml = `<div class="col-xl-3 banner-div" id="product-${response.image_id}">
                <div class="banner-area">
                    <input type="hidden" name="imageArray[]" value="${response.image_id}">
                    <a href="#"><img src="${response.image_path}" height="100px"></a>
                    <a class="remove-banner" onclick="deleteImage(${response.image_id})" style="display: inline;" href="javascript:void(0)"><i class="fas fa-trash"></i></a>
                </div>
            </div>`;
            $('#product-gallery').append(imageHtml);
            //console.log(response)
        },
        complete:function(file){
            this.removeFile(file);
        }
    });
    //delete
    function deleteImage(id){
        $('#product-'+id).remove();
    }
    //form submit
    $(document).on("submit","#productForm",function() {
        event.preventDefault();
        var formArray = $(this).serializeArray(); 
        $('button[type="submit"]').prop('disabled', true);
        $.ajax({
            url: '{{ route("products.store") }}',
            type: 'post',
            data: formArray,
            dataType: 'json',
            success: function(response){
                $('button[type="submit"]').prop('disabled', false);
                if(response['status'] == true){
                    window.location.href="{{ route('products.index') }}";
                } else {
                    var errors = response['errors'];
                    $(".errors").removeClass('invalid-feedback').html('');
                    $("input[type='text'], select, input[type='number']").removeClass('is-invalid');
                    $.each(errors, function(key,value){  
                        $(`#${key}`).addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(value);
                    });
                }

            },
            error : function(){
                console.log("something went wrong");
            }
        });
    })
    //ckeditor
    ClassicEditor.create( document.querySelector( '#shortdescription'),{
        ckfinder:{
            uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token()}}'
        }
    })
    //description
    ClassicEditor.create( document.querySelector( '#description'),{
        ckfinder:{
            uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token()}}'
        }
    })
    // .then( editor => {
    //     console.error( editor );
    // })
    .catch( error => {
        console.error( error );
    });
</script>
@endsection
