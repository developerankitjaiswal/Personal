@extends('admin.layout.app')
@section('title', 'Create Category')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Update Category</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Category Manageemnt</li>
                </ol>
            </div>
            <div class="ms-auto">
                <a href="{{ route('category.index') }}" class="btn btn-primary rounded-2 px-4"><i
                        class="fa fa-list fa-lg me-2 ms-n2 text-success-900"></i> Category Management</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data" id="categoryForm">
                    @csrf
                    <div class="card border-0 mb-4">
                        <div class="card-header h6 mb-0 bg-none p-3">
                            <i class="fa fa-list fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Update Category
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Category Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter Category Name" value="{{ $category->name }}">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">Category Status<span class="text-danger">*</span></label>
                                        <select class="form-select" name="status" id="status">
                                            <option value="1" {{ ($category->status == 1) ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ ($category->status == 0) ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="sort">Display Order <span class="form-text">(optional)</span></label>
                                        <input type="number" class="form-control" name="sort" id="sort"
                                            placeholder="Enter Display Order" value="{{ $category->display_order }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="slug">Category Slug<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="slug" id="slug"
                                            placeholder="Enter Category Slug" value="{{ $category->slug }}" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Category Thumbnail <span class="form-text">(optional)</span></label>
                                        <input type="file" class="form-control" name="thumbnail" id="image">
                                    </div>
                                    @if(!empty($category->thumbnail))
                                        <div style="margin: 5px;"> 
                                            <img src="{{ asset('uploads/category/'.$category->thumbnail.'') }}" class="rounded h-100px my-n1 mx-n1"/> 
                                        </div>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Category Banner <span class="form-text">(optional)</span></label>
                                        <input type="file" class="form-control" name="banner" id="image">
                                    </div>
                                    @if(!empty($category->banner))
                                        <div style="margin: 5px;"> 
                                            <img src="{{ asset('uploads/category/'.$category->banner.'') }}" class="rounded h-100px my-n1 mx-n1"/>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- seo tool --}}
                            <div id="divSeotool" style="display:none; border: 1px solid #d3d3d3; padding: 11px; background: #f5f5f5;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta-title">Meta Title</label>
                                            <input type="text" class="form-control" name="metatitle" id="meta-title"
                                                placeholder="Enter Seo Meta Title" value="{{ $category->metatitle }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta-keyword">Meta Keyword</label>
                                            <textarea class="form-control" name="metakeyword" id="meta-keyword" placeholder="Enter Seo Meta Keyword">{{ $category->metakeyword }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta-desc">Meta Description</label>
                                            <textarea class="form-control" name="metadescription" id="meta-desc" placeholder="Enter Seo Meta Description">{{ $category->metadescription }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- seo tool end --}}
                        </div>

                        <div class="card-footer bg-none d-flex p-3">
                            <button type="submit" name="saveblog" class="btn btn-primary"><i class="fas fa-check"></i>
                                CLICK TO UPDATE CATEGORY </button>
                            <button type="button" id="btnSeotool" class="btn btn-default ms-2">SHOW SEO TOOL</button>
                            <a href="#" class="btn btn-danger ms-2">CANCEL</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom-javascript')
<script>
    $(document).ready(function() {
      $('#name').on('input', function() {
        var name = $(this).val().trim().toLowerCase();
        var slug = name.replace(/\s+/g, '-');   
        $('#slug').val(slug);
      });
    });
    //seo tool
    $("#btnSeotool").click(function () {
        if ($(this).text() == "SHOW SEO TOOL") {
            $("#divSeotool").show();
            $(this).text("CLOSE SEO TOOL");
        } else {
            $("#divSeotool").hide();
            $(this).text("SHOW SEO TOOL");
        }
    });
</script>
@endsection
