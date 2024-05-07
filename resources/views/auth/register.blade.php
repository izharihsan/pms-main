@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<form class="login-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card mb-0">
        <div class="card-body">
            <div class="text-center mb-3">
                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                    <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt="">
                </div>
                <h5 class="mb-0">Create account</h5>
                <span class="d-block text-muted">All fields are required</span>
            </div>

            <div class="text-center text-muted content-divider mb-3">
                <span class="px-2">Your credentials</span>
            </div>

            <div class="mb-3">
                <label class="form-label">Full name</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="text" class="form-control" name="name" placeholder="JohnDoe">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-circle text-muted"></i>
                    </div>
                </div>
                <div class="form-text text-danger"><i class="ph-x-circle me-1"></i> This username is already taken</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Your email</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="email" class="form-control" name="email" placeholder="john@doe.com">
                    <div class="form-control-feedback-icon">
                        <i class="ph-at text-muted"></i>
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
                <label class="form-label">Confirm Password</label>
                <div class="form-control-feedback form-control-feedback-start">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="•••••••••••">
                    <div class="form-control-feedback-icon">
                        <i class="ph-lock text-muted"></i>
                    </div>
                </div>
            </div>

            <div class="text-center text-muted content-divider mb-3">
                <span class="px-2">Additions</span>
            </div>

            <div class="mb-3">
                <label class="form-check mb-2">
                    <input type="checkbox" name="remember" class="form-check-input" checked="">
                    <span class="form-check-label">Send me <a href="#">&nbsp;test account settings</a></span>
                </label>

                <label class="form-check mb-2">
                    <input type="checkbox" name="remember" class="form-check-input" checked="">
                    <span class="form-check-label">Subscribe to monthly newsletter</span>
                </label>

                <label class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input">
                    <span class="form-check-label">Accept <a href="#">&nbsp;terms of service</a></span>
                </label>
            </div>

            <button type="submit" class="btn btn-teal w-100">Register</button>
        </div>
    </div>
</form>
@endsection