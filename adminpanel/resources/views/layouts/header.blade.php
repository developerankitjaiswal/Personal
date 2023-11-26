<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/favicon.png') }}">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <!----Table---->
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />
    <!----Select---->
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <!----Others---->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/toaster.css') }}" rel="stylesheet" />
</head>
<!----Head----->
<body class="theme-blue">
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-gradient-enabled">
        <div id="header" class="app-header">
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('uploads/logo.png') }}">
                </a>
                <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-nav">
                <div class="navbar-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon"> <i
                            class="fa fa-bell"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu media-list dropdown-menu-end">
                        <div class="dropdown-header">NOTIFICATIONS (5)</div>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left"> <i class="fa fa-bug media-object bg-gray-500"></i> </div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports <i
                                        class="fa fa-exclamation-circle text-danger"></i></h6>
                                <div class="text-muted fs-10px">3 minutes ago</div>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item media">
                            <div class="media-left"> <i class="fa fa-envelope media-object bg-gray-500"></i> <i
                                    class="fab fa-google text-warning media-object-icon fs-14px"></i> </div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted fs-10px">2 hour ago</div>
                            </div>
                        </a>
                        <div class="dropdown-footer text-center"> <a href="javascript:;"
                                class="text-decoration-none">View more</a> </div>
                    </div>
                </div>
                <div class="navbar-item navbar-user dropdown"> <a href="#"
                        class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown"> <img
                            src="{{ asset('assets/img/user.png') }}" /> <span> <span
                                class="d-none d-md-inline">{{ Auth::user()->name }}</span> <b class="caret"></b>
                        </span> </a>
                    <div class="dropdown-menu dropdown-menu-end me-1">
                        <a href="#" class="dropdown-item">Edit Profile</a>
                        <a href="#" class="dropdown-item">Change Password</a>
                        <a href="#" class="dropdown-item">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
