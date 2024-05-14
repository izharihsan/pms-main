@extends('layouts.admin')

@section('title', 'Create Property')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <h3>Add New Property - Type</h3>
            <small>Choose the appropriate type to describe your property</small>
        </div>
        
        <form method="GET" action="{{ route('property.create') }}">
            <div class="row">
                <div class="col-sm-6 col-xl-6">
                    <div class="card">
                        <div class="card-img-actions mx-1 mt-1">
                            <img class="card-img img-fluid" src="{{ asset('img/hotel.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <div class="d-flex align-items-start flex-nowrap">
                                <div>
                                    <h6 class="fw-semibold me-2" id="text">Hotel</h6>
                                    <span>Select this if your property is a hotel, resort, guesthouse, hostel, or any other type listed on the link above.</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end flex-nowrap">
                                <button type="button" class="btn btn-outline-light ms-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" value="Hotel" id="hotel">
                                        <label class="form-check-label" for="hotel">
                                            Pilih
                                        </label>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-6">
                    <div class="card">
                        <div class="card-img-actions mx-1 mt-1">
                            <img class="card-img img-fluid" src="{{ asset('img/home.png') }}" alt="">
                        </div>

                        <div class="card-body">
                            <div class="d-flex align-items-start flex-nowrap">
                                <div>
                                    <h6 class="fw-semibold me-2" id="text">House</h6>
                                    <span>Select this if your property is a villa/bungalow, apartment, camping/glamping, vacation home, or any other type listed on the link above.</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end flex-nowrap">
                                <button type="button" class="btn btn-outline-light ms-auto form-check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" value="House" id="house">
                                        <label class="form-check-label" for="house">
                                            Pilih
                                        </label>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <button class="btn btn-secondary btn-outline" style="float: left;" type="button"><i class="ph-x pr-2"></i> Cancel</button>
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="step" value="2">
                            <button class="btn btn-primary" style="float: right;" type="submit">Continue <i class="ph-arrow-right pl-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="content-text"></div>
@endsection