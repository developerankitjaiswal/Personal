@extends('admin.layout.app')
@section('title', 'Update Banner')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Update Banner</h1>
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
                        <i class="fa fa-image fa-lg fa-fw text-dark text-opacity-50 me-1"></i> Update Banner
                    </div>
                    <form action="{{ route('banner.update', $bann->id) }}" method="POST" enctype="multipart/form-data">  
                      @csrf
                      <div class="card-body">
                        <div class="row"> 
                          <div class="col-md-6">      
                            <div class="mb-3">
                              <label class="form-label">Banner Title<span class="text-danger">*</span></label>
                              <input class="form-control" type="text" name="btitle" placeholder="Enter Banner Title" value="{{ $bann->title }}"/>
                            </div>
                          </div> 

                          <div class="col-md-6">      
                            <div class="mb-3">
                              <label class="form-label">Banner Sub-Title <span class="form-text">(optional)</span></label>
                              <input class="form-control" type="text" name="bsubtitle" placeholder="Enter Banner Sub Title" value="{{ $bann->subtitle }}"/>
                            </div>
                          </div> 
    
                          <div class="col-md-12">      
                            <div class="mb-3">
                              <label class="form-label">Banner Redirect Link <span class="form-text">(optional)</span></label>
                              <input class="form-control" type="text" name="burl" placeholder="Enter Banner Redirect Link" value="{{ $bann->url_slug }}"/>
                            </div>
                          </div> 
                          
                          <div class="col-md-6">      
                            <div class="mb-3">
                              <label class="form-label">Banner Image<span class="text-danger">*</span></label>
                              <input class="form-control" type="file" name="bimage" accept="image/png, image/webp, image/jpeg"/>
                            </div>
                            @if(!empty($bann->image))
                                <div style="margin: 5px;"> 
                                    <img src="{{ asset('uploads/banner/'.$bann->image.'') }}" class="rounded h-100px my-n1 mx-n1"/> 
                                </div>
                            @endif
                          </div> 
    
                          <div class="col-md-3">      
                            <div class="mb-3">
                              <label class="form-label">Banner Display Order<span class="text-danger">*</span></label>
                              <input class="form-control" type="number" name="bsort" placeholder="Enter Banner Display Order" value="{{ $bann->display_order }}"/>
                            </div>
                          </div> 
    
                          <div class="col-md-3">      
                            <div class="mb-3">
                              <label class="form-label">Banner Status<span class="text-danger">*</span></label>
                              <select class="form-control" name="bstatus">
                                <option value="1" {{ ($bann->status == 1) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ ($bann->status == 0) ? 'selected' : '' }}>Inactive</option>
                              </select>
                            </div>
                          </div> 
                        </div>
                      </div>
                        <div class="card-footer bg-none d-flex p-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> CLICK TO UPDATE DETAIL </button>
                            <button type="reset" class="btn btn-danger ms-2">RESET</button>
                        </div>
                  </form>    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-javascript')
@endsection
