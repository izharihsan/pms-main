@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<!-- Login form -->
<form class="login-form" action="{{ route('loginSSo') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                    <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt="">
                </div>
                <h5 class="mb-0">Login to your account</h5>
                <span class="d-block text-muted">Enter your credentials below</span>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="text" class="form-control" name="email" placeholder="john@doe.com">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-circle text-muted"></i>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="password" class="form-control" name="password" placeholder="•••••••••••">
                    <div class="form-control-feedback-icon">
                        <i class="ph-lock text-muted"></i>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>

            <div class="text-center">
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>
        </div>
    </div>
</form>
<!-- /login form -->
@endsection