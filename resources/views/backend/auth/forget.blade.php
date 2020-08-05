@extends('backend.auth.layouts.auth')
@section('form')
    <div class="col-lg-7 d-none d-lg-block bg-auth-image"></div>
    <div class="col-lg-5">
        <div class="p-3">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
            </div>
            <form class="user">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Reset Password
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/register') }}">Create an Account!</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ url('admin/auth/login') }}">Already have an account? Login!</a>
            </div>
        </div>
    </div>
@endsection
