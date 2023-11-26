@extends('admin.layout.app')
@section('title', 'Manage Category')
@section('content')
    <div id="content" class="app-content">
        <div class="d-flex align-items-center mb-3">
            <div>
                <h1 class="page-header mb-0">User List</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i class="fa fa-arrow-back"></i> User Manageemnt</li>
                </ol>
            </div>
            <div class="ms-auto">
                <a href="#" class="btn btn-primary rounded-0 px-4"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> ADD NEW USER</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 mb-4">
                    <div class="card-header h6 mb-0 bg-none p-3">
                        <i class="fa fa-list fa-lg fa-fw text-dark text-opacity-50 me-1"></i>All User List
                        <div class="card-tools pull-right">
                            <a href="#" class="btn btn-primary btn-xs rounded-0 px-4"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> CREATE USER</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="data-table-default" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th width="1%"></th>
                                    <th width="1%"></th>
                                    <th class="text-nowrap">Name</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Username</th>
                                    <th class="text-nowrap" width="10%">Role</th>
                                    <th class="text-nowrap" width="1%">Status</th>
                                    <th class="text-nowrap" width="12%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td class="fw-bold text-dark">1</td>
                                    <td class="with-img">
                                        <img src="{{ asset('assets/img/user.png') }}" class="rounded h-40px my-n1 mx-n1"/>
                                    </td>
                                    <td>Admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>admin@123</td>
                                    <td><span class="badge bg-gray-800 align-items-center px-2 py-6px">Admin</span></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input statuscategory" data-id="1"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                        <a class="btn btn-danger btn-xs" href="1" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="fw-bold text-dark">1</td>
                                    <td class="with-img">
                                        <img src="{{ asset('assets/img/user.png') }}" class="rounded h-40px my-n1 mx-n1"/>
                                    </td>
                                    <td>Content</td>
                                    <td>content@gmail.com</td>
                                    <td>content@123</td>
                                    <td><span class="badge bg-gray-800 align-items-center px-2 py-6px">Content Manager</span></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input statuscategory" data-id="1"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                        <a class="btn btn-danger btn-xs" href="1" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="fw-bold text-dark">1</td>
                                    <td class="with-img">
                                        <img src="{{ asset('assets/img/user.png') }}" class="rounded h-40px my-n1 mx-n1"/>
                                    </td>
                                    <td>Product</td>
                                    <td>product@gmail.com</td>
                                    <td>product@123</td>
                                    <td><span class="badge bg-gray-800 align-items-center px-2 py-6px">Product Manager</span></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input statuscategory" data-id="1"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                        <a class="btn btn-danger btn-xs" href="1" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="fw-bold text-dark">1</td>
                                    <td class="with-img">
                                        <img src="{{ asset('assets/img/user.png') }}" class="rounded h-40px my-n1 mx-n1"/>
                                    </td>
                                    <td>Order</td>
                                    <td>order@gmail.com</td>
                                    <td>order@123</td>
                                    <td><span class="badge bg-gray-800 align-items-center px-2 py-6px">Order Manager</span></td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input statuscategory" data-id="1"
                                                type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                        <a class="btn btn-danger btn-xs" href="1" onClick="if(confirm('Are you sure want to delete this data')){ return true;} else { return false; }"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                                    </td>
                                </tr>
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
