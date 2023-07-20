@extends('layouts.auth.app')

@section('content')
    <div class="bg-gd-lake">
        <div class="hero-static content content-full bg-body-extra-light">
          <div class="py-4 px-1 text-center mb-4">
            <a class="link-fx fw-bold" href="{{route('home')}}">          
                <img src="{{ asset('assets/images/favicon.ico')}}" height="30px" width="30px">
              <span class="font-size-xl" style="color: #0172aa">Four</span> <span class="font-size-xl warning" style="color: #e15d3a;">Symmetrons</span>
            </a>
            <h1 class="h3 fw-bold mt-5 mb-2"> </h1>
            <h2 class="h5 fw-medium text-muted mb-0">{{ __('Reset Password') }}</h2>
          </div>
          <div class="row justify-content-center px-1">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
    
                            <input type="hidden" name="token" value="{{ $token }}">
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
