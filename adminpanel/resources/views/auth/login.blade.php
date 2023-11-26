<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/favicon.png') }}">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <style>
        .login-bg {
            background: url(assets/img/login.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .login-header {
            background: linear-gradient(45deg, #4285f4, #06388a) !important;
            margin: -1px !important;
        }

        .btn-login {
            background: linear-gradient(45deg, #4285f4, #06388a) !important;
            color: #fff;
        }
    </style>
</head>

<body id="body" class="auth-page"
    style="background:#f5f8fa url('assets/img/login.png'); background-size: cover; background-position: center center;">
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box" style="background: #232a3e;">
                                    <div class="text-center p-3">
                                        <a class="logo logo-admin">
                                            <img src="assets/img/logo.png" height="70" alt="logo"
                                                class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">ADMIN PANEL</h4>
                                    </div>
                                </div>
                                {{-- error --}}
                                @if (Session::has('error'))
                                    <div
                                        style="background: #f93162; padding: 5px 11px 8px; font-weight: 700; color: white; border-radius: 0px; text-align:center;">
                                        {{ Session::get('error') }}</div>
                                @endif
                                {{-- error --}}
                                {{-- success --}}
                                @if (Session::has('success'))
                                    <div
                                        style="background: green; padding: 5px 11px 8px; font-weight: 700; color: white; border-radius: 0px; text-align:center;">
                                        {{ Session::get('success') }}</div>
                                @endif
                                {{-- success --}}
                                <div class="card-body pt-0">
                                    <form method="POST" class="my-4" action="{{ route('login') }}">
                                        @csrf
                                        @method('post')
                                        <div class="form-floating mb-20px">
                                            <input id="email" type="email" name="email"
                                                class="form-control fs-13px h-40px @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ old('email') }}" />
                                            <label for="email"
                                                class="d-flex align-items-center py-0">{{ __('Email Address') }}</label>
                                            @error('email')
                                                <p class="invalid-feedback" role="alert">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-20px">
                                            <input id="password" name="password" type="password"
                                                class="form-control fs-13px h-40px @error('password') is-invalid @enderror"
                                                placeholder="Password" />
                                            <label for="password"
                                                class="d-flex align-items-center py-0">{{ __('Password') }}</label>
                                            @error('password')
                                                <p class="invalid-feedback" role="alert">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-login" type="submit">{{ __('Login') }} <i
                                                            class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
