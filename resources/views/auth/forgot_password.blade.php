@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
    <div class="title">
        Forgot Password?
    </div>
    <div class="sub-title">
        Enter your email to reset your password.
    </div>

    <form action='' method='' enctype='multipart/form-data'>
    @csrf
    <div class='form-group mb-3'>
        <label for=''>Email</label>
        <input type='text' class='form-control' name='' id='' placeholder='' required>
    </div>

    <div class="row">
        <div class="col-md-6">
            {{-- MODALS --}}
            <button type='button' class='btn btn-primary btn-block' data-bs-toggle="modal" data-bs-target="#basicModal">Submit</button>
        </div>
        <div class="col-md-6">
            <button type='submit' class='btn btn-primary btn-block'>Cancel</button>
        </div>
    </div>
    </form>

    {{-- MODALS --}}
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="ph-envelope"></i>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Please check your email! You can get the <br> instruction in your email to reset your password.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button text-center" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection