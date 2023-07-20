@extends('layouts.auth.app')

@section('content')
<div class="bg-gd-lake">
    <div class="hero-static content content-full bg-body-extra-light">
      <div class="py-4 px-1 text-center mb-4">
        <a class="link-fx fw-bold" href="{{route('home')}}">          
            <img src="{{ asset('assets/images/favicon.ico')}}" height="30px" width="30px">
          <span class="font-size-xl" style="color: #0172aa">Four</span> <span class="font-size-xl warning" style="color: #e15d3a;">Symmetrons</span>
        </a>
        <h1 class="h3 fw-bold mt-5 mb-2">Don’t worry, we’ve got your back</h1>
        <h2 class="h5 fw-medium text-muted mb-0">Please enter your email</h2>
      </div>
      <div class="row justify-content-center px-1">
        <div class="col-sm-8 col-md-6 col-xl-4">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            <div class="mb-4 space-y-2">
              <button type="submit" class="btn btn-lg btn-alt-primary w-100 py-3 fw-semibold">
                {{ __('Send Password Reset Link') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
