@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="title">
        Register
    </div>
    <div class="sub-title">
        Enter your email and password.
    </div>

    <form action='' method='' enctype='multipart/form-data'>
    @csrf
    <div class='form-group mb-3'>
        <label for=''>Email</label>
        <input type='text' class='form-control' name='' id='' placeholder=''>
    </div>
    <div class='form-group mb-3'>
        <label for=''>Password</label>
        <input type='text' class='form-control' name='' id='' placeholder=''>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type='submit' class='btn btn-primary btn-block'>Submit</button>
        </div>
        <div class="col-md-6">
            <button type='submit' class='btn btn-primary btn-block'>Cancel</button>
        </div>
    </div>
    </form>
@endsection