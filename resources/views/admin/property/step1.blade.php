@extends('layouts.auth')

@section('title', 'Create Property')

@section('content')

<div class="container">
    <form method="GET" action="{{ route('admin.property.create') }}">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <h3>Add New Property - Type</h3>
                    <small>Choose the appropriate type to describe your property</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="width: 850px; margin: 20px auto;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class='card' style="width: 367px;">
                                <div class='card-body' style="padding: 0px;">
                                    <div class="card-img-actions">
                                        <img class="card-img img-fluid" src="{{ asset('img/hotel.png') }}"
                                            style="width: 367px; height: 243px;" alt="">
                                    </div>
                                    <div class="text-center p-1" id="text" style="
                                    background-color: #D9D9D9;
                                    font-size: 20px;
                                    margin-top: -20px;
                                    position: relative;
                                ">Hotel</div>
                                    <div class="d-flex align-items-start flex-nowrap mx-2 mt-2">
                                        <div style="color: #013FA1;">
                                            <span>Select this if your property is a hotel, resort, guesthouse, hostel,
                                                or any other type listed on the link above.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end flex-nowrap mx-2 mb-2">
                                        <button type="button" class="btn btn-outline-light ms-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    value="Hotel" id="hotel">
                                                <label class="form-check-label" for="hotel">
                                                    Pilih
                                                </label>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class='card' style="width: 367px;">
                                <div class='card-body' style="padding: 0px;">
                                    <div class="card-img-actions">
                                        <img class="card-img img-fluid" src="{{ asset('img/home.png') }}"
                                            style="width: 367px; height: 243px;" alt="">
                                    </div>
                                    <div class="text-center p-1" id="text" style="
                                    background-color: #D9D9D9;
                                    font-size: 20px;
                                    margin-top: -20px;
                                    position: relative;
                                ">House</div>
                                    <div class="d-flex align-items-start flex-nowrap mx-2 mt-2">
                                        <div style="color: #013FA1;">
                                            <span>Select this if your property is a villa/bungalow, apartment,
                                                camping/glamping, vacation home, or any other type listed on the link
                                                above.</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end flex-nowrap mx-2 mb-2">
                                        <button type="button" class="btn btn-outline-light ms-auto form-check">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    value="House" id="house">
                                                <label class="form-check-label" for="house">
                                                    Pilih
                                                </label>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ml-auto">
                <button class="btn btn-secondary btn-outline" style="float: left;" type="button"><i
                        class="ph-x pr-2"></i> Cancel</button>
            </div>
            <div class="col-md-6">
                <input type="hidden" name="step" value="2">
                <button class="btn btn-primary" style="float: right;" type="submit">Continue <i
                        class="ph-arrow-right pl-2"></i></button>
            </div>
        </div>
    </form>
</div>
@endsection