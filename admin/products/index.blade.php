@extends('admin.layout.app')
@section('title', 'Manage Product')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">Product List</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> Product Manageemnt</li>
                </ol>
            </div>
            <div class="ms-auto">
                <a href="{{ route('category.create') }}" class="btn btn-primary rounded-2 px-4"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> CREATE CATEGORY</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 mb-4">
                    <div class="card-header h6 mb-0 bg-none p-3">
                        <i class="fa fa-list fa-lg fa-fw text-dark text-opacity-50 me-1"></i>All Product List
                    </div>
                    <div class="card-body">
                        <table id="data-table-default" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th width="1%"></th>
                                    <th width="1%"></th>
                                    <th class="text-nowrap">Product</th>
                                    <th class="text-nowrap">Skucode</th>
                                    <th class="text-nowrap">Quantity</th>
                                    <th class="text-nowrap">Price</th>
                                    <th class="text-nowrap" width="1%">Status</th>
                                    <th class="text-nowrap" width="12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                @php
                                    $productImage = $product->product_images->first();   
                                @endphp
                                    <tr class="odd gradeX">
                                        <td class="fw-bold text-dark">{{ $product->id }}</td>
                                        <td class="with-img">
                                            @if(empty($productImage->image))
                                                <img src="{{ asset('uploads/no-image.jpg') }}" class="rounded h-40px my-n1 mx-n1"/>
                                            @else
                                                <img src="{{ asset('uploads/product/small/'.$productImage->image.'') }}" class="rounded h-40px my-n1 mx-n1"/>
                                            @endif
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->skucode }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td> {{ $product->price }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input statusproduct" data-id="{{ $product->id }}"
                                                    type="checkbox" {{ $product->status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{ route('products.delete', $product->id) }}" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-javascript')
@endsection
