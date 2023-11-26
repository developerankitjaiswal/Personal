@extends('admin.layout.app')
@section('title', 'Manage Banner')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Banner List</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Banner Management</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 mb-4">
                    <div class="card-header h6 mb-0 bg-none p-3">
                        <i class="fa fa-image fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Add Banner
                    </div>
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">  
                      @csrf
                      <div class="card-body">
                        <div class="row"> 
                          <div class="col-md-4">      
                            <div class="mb-3">
                              <label class="form-label">Banner Title<span class="text-danger">*</span></label>
                              <input class="form-control" type="text" name="btitle" placeholder="Enter Banner Title" value="{{ old('btitle') }}"/>
                            </div>
                          </div> 

                          <div class="col-md-4">      
                            <div class="mb-3">
                              <label class="form-label">Banner Sub-Title <span class="form-text">(optional)</span></label>
                              <input class="form-control" type="text" name="bsubtitle" placeholder="Enter Banner Sub Title" value="{{ old('bsubtitle') }}"/>
                            </div>
                          </div> 
    
                          <div class="col-md-4">      
                            <div class="mb-3">
                              <label class="form-label">Banner Redirect Link <span class="form-text">(optional)</span></label>
                              <input class="form-control" type="text" name="burl" placeholder="Enter Banner Redirect Link" value="{{ old('burl') }}"/>
                            </div>
                          </div> 
                          
                          <div class="col-md-6">      
                            <div class="mb-3">
                              <label class="form-label">Banner Image<span class="text-danger">*</span></label>
                              <input class="form-control" type="file" name="bimage" accept="image/png, image/webp, image/jpeg" value="{{ old('bimage') }}"/>
                            </div>
                          </div> 
    
                          <div class="col-md-3">      
                            <div class="mb-3">
                              <label class="form-label">Banner Display Order<span class="text-danger">*</span></label>
                              <input class="form-control" type="number" name="bsort" placeholder="Enter Banner Display Order" value="{{ old('bsort') }}"/>
                            </div>
                          </div> 
    
                          <div class="col-md-3">      
                            <div class="mb-3">
                              <label class="form-label">Banner Status<span class="text-danger">*</span></label>
                              <select class="form-control" name="bstatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              </select>
                            </div>
                          </div> 
                        </div>
                      </div>
                        <div class="card-footer bg-none d-flex p-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> CLICK TO SAVE DETAIL </button>
                            <button type="reset" class="btn btn-danger ms-2">RESET</button>
                        </div>
                  </form>    
                </div>
            </div>
        </div>

        <div class="row mb-3">
            @foreach ($banners as $bann)
              <div class="col-xl-4 banner-div">
                <div class="banner-area">
                  <a href="#"><img src="{{asset('uploads/banner/'.$bann->image.'')}}"></a>
                  <div class="pic_title" style="background: #fff;padding: 10px;">
                    <div class="col-xl-12 row">
                      <div class="col-xl-11">
                        <div class="banner_title" style="font-weight: bold;"> {{ $bann->title }} </div>
                      </div>
                      <div class="col-xl-1" style="text-align: end;"> 
                        <div class="form-check form-switch">
                          <input class="form-check-input statusbanner" data-id="{{ $bann->id }}" type="checkbox" {{ $bann->status==1 ? 'checked': '' }}>
                        </div> 
                      </div>
                    </div>  
                  </div>
                  <a class="remove-banner" style="display: inline;" href="{{ route('banner.delete', $bann->id) }}" onClick="if(confirm('Are you sure want to delete this banner')){ return true;} else { return false; }"><i class="fas fa-trash"></i></a>
                  <a class="edit-banner" href="{{ route('banner.edit', $bann->id) }}" style="display: inline;"><i class="fas fa-edit"></i></a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
@section('custom-javascript')
<script>
  $('.statusbanner').change(function () {
      let status = $(this).prop('checked') === true ? 1 : 0;
      let bannerId = $(this).data('id');
      $.ajax({
          type: "GET",
          dataType: "json",
          url: '{{ route('banner.status') }}',
          data: {'status': status, 'banner_id': bannerId},
          success: function (data) {
              toastr.success(data.message);
          }
      });
  });
</script>
@endsection
