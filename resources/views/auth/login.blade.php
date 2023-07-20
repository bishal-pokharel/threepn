@extends('layouts.auth.app')

@section('title')
Login
@endsection
@section('content')
    <div class="bg-image" style="background-image: url({{ asset('assets_admin/media/photos/photo34@2x.jpg')}});">
        <div class="row mx-0 bg-black-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white">
                        Get Inspired and Create.
                    </p>
                    <p class="font-italic text-white-op">
                        Copyright &copy; <span class="js-year-copy"></span>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                <div class="content content-full">
                    <!-- Header -->
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" href="#">
                        <img src="{{ asset('assets_admin/images/favicon.ico')}}" height="30px" width="30px">
                        <span class="font-size-xl" style="color: #0172aa">Three</span><span class="font-size-xl warning" style="color: #e15d3a;">Pn</span>
                        </a>
                        <h1 class="h3 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-signin px-30" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group row @error('email') is-invalid @enderror">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="email" name="email"  @error('email') aria-describedby="login-username-error" @enderror>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            @error('email')
                                <div id="login-username-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group row @error('password') is-invalid @enderror">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="password" name="password" @error('password') aria-describedby="login-password-error" @enderror>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            @error('password')
                                <div id="login-password-error" class="invalid-feedback animated fadeInDown">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                <i class="si si-login mr-10"></i> Sign In
                            </button>
                            <div class="mt-30">
                                @if(Route::has('password.request'))
                                    <a class="link-effect  mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                        <i class="fa fa-warning mr-5"></i> Forgot Password
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
            </div>
        </div>
    </div>
@endsection