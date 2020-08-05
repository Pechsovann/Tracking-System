@extends('backend.auth.layouts.auth')

@section('title', 'Login')

@section('form')
    <div class="col-lg-7 d-none d-lg-block bg-auth-image"></div>
    <div class="col-lg-5">
        <div class="p-3">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <form class="user">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                           aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                           placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/forget') }}">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/register') }}">Create an Account!</a>
            </div>
        </div>
    </div>
@endsection
