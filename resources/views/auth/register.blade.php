@extends('backend.auth.layouts.auth')

@section('title', 'Register')

@section('form')
    <div class="col-lg-7 d-none d-lg-block bg-auth-image"></div>
    <div class="col-lg-5">
        <div class="p-3">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form method="POST" action="{{ route('register') }}" class="user">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Username"
                           class="form-control form-control-user @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" placeholder="Email Address"
                           class="form-control form-control-user @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="password" type="password" placeholder="Password"
                               class="form-control form-control-user @error('password') is-invalid @enderror"
                               name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control form-control-user"
                               name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Register') }}
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/forget') }}">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/login') }}">Already have an account? Login!</a>
            </div>
        </div>
    </div>
@endsection
