@extends('layouts.admin')

@section('title', 'Create Property')

@push('css')
{{-- <script src="{{ asset('assets/demo/pages/uploader_plupload.js')}}"></script> --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Include Google Maps API -->
<script src="{{ asset('assets/js/vendor/uploaders/plupload/plupload.full.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/uploaders/plupload/plupload.queue.min.js')}}"></script>
<style>
    #map {
        flex: auto;
        flex-basis: 0;
        flex-grow: 4;
        height: 300px;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Create Property</h6>
    </div>

    <form class="wizard-form steps-validation" id="formSubmit" action="{{ route('admin.property.update', [$data->id])}}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <h6>General</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Property Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="{{ $data->name }}" id="property_name" class="form-control required"
                            placeholder="Enter Property Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Legal Name: <span class="text-danger">*</span></label>
                        <input type="text" name="legal_name" value="{{ $data->legal_name }}" id="legal_name" class="form-control required"
                            placeholder="Enter Legal Name">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="text" name="phone" value="{{ $data->phone }}" id="property_phone" class="form-control required " placeholder="628xxxxxxxx">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Total Room Number: <span class="text-danger">*</span></label>
                        <input type="number" name="total_room" value="{{ $data->total_room }}" id="property_room" class="form-control required " placeholder="Enter Total Room">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Email: <span
                                class="text-danger">*</span></label>
                        <input type="email" name="email" value="{{ $data->email }}" id="property_email" class="form-control required " placeholder="Enter Email">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Business Identification Number (NIB): <span
                                class="text-danger">*</span></label>
                        <input type="text" name="nib" value="{{ $data->nib }}" class="form-control required " placeholder="Enter NIB">
                    </div>
                </div>

                <input type="hidden" name="category" value="{{ \Request::get('category') }}">
                <input type="hidden" name="property_type" value="{{ \Request::get('property_type') }}">

                <div class="col-lg-12">
                    <div class="row">
                        <p>Rate :</p>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">One</p>
                                        <input type="radio" name="rate" value="1"
                                        {{ ($data['rate'] == 1) ? 'checked' : '' }}
                                            class="appearance-none border-none focus:outline-none" id="cc_li_c"
                                            checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Two</p>
                                        <input type="radio" name="rate" value="2"
                                        {{ ($data['rate'] == 2) ? 'checked' : '' }}
                                            class="appearance-none border-none focus:outline-none" id="cc_li_c"
                                            checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Three</p>
                                        <input type="radio" name="rate" value="3"
                                        {{ ($data['rate'] == 3) ? 'checked' : '' }}
                                            class="appearance-none border-none focus:outline-none" id="cc_li_c"
                                            checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Four</p>
                                        <input type="radio" name="rate" value="4"
                                        {{ ($data['rate'] == 4) ? 'checked' : '' }}
                                            class="appearance-none border-none focus:outline-none" id="cc_li_c"
                                            checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Five</p>
                                        <input type="radio" name="rate" value="5"
                                        {{ ($data['rate'] == 5) ? 'checked' : '' }}
                                            class="appearance-none border-none focus:outline-none" id="cc_li_c"
                                            checked="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Description: </label>
                        <textarea name="description" cols="30" rows="5" class="form-control">{{ $data['description'] }}</textarea>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-3">
                        <h3>Property Address</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Province: <span class="text-danger">*</span></label>
                        <select name="province" id="province" class="form-control required">
                            <option value="" selected disabled>-- Select Province --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">City: <span class="text-danger">only for change</span></label>
                        <select name="city" id="city" class="form-control required">
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">District: <span class="text-danger">only for change</span></label>
                        <select name="district" id="district" class="form-control required">
                            <option value="" selected disabled>-- Select District --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Village: <span class="text-danger">only for change</span></label>
                        <select name="village" id="village" class="form-control required">
                            <option value="" selected disabled>-- Select Village --</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Postal Code: <span class="text-danger">only for change</span></label>
                        <input type="number" name="postal_code" class="form-control required " placeholder="Enter postal code">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Street Address: <span class="text-danger">only for change</span></label>
                        <textarea name="address" id="property_address" cols="30" rows="5" class="form-control required"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">Location: <span class="text-danger">*</span></label>
                    <input id="pac-input" class="form-control" type="text" placeholder="Enter a location">
                </div>
            </div>
            <input type="hidden" name="long" id="long" value="{{ $data->address->long }}">
            <input type="hidden" name="lat" id="lat" value="{{ $data->address->lat }}">
            <div class="col-lg-12">
                <div id="map"></div>
                <div id="sidebar"></div>
            </div>

            <div class="col-lg-12">
                <div class="mb-3">
                    <h3>Property Type and Style</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Property Type: <span class="text-danger">*</span></label>
                    <select name="type_id" id="" class="form-control required">
                        <option value="resort">Resort</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <p>Property Styles :</p>
                    @foreach ($property_style as $item)
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="style_id[]"
                                        value="{{ $item['id'] }}" id="cc_li_c">
                                    <label class="form-check-label" for="cc_li_c">{{ $item['name'] }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </fieldset>

        <h6>Facitilies</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <p class="fw-semibold">Left stacked</p>
                        <div class="accordion" id="accordion_collapsed">
                            @foreach ($facilities as $i => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-semibold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsed_item{{ $i }}"
                                        aria-expanded="false">
                                        {{ $item['category_name'] }}
                                    </button>
                                </h2>
                                <div id="collapsed_item{{ $i }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed" style="">
                                    <div class="accordion-body">
                                        <div class="border p-3 rounded">
                                            <div class="row">
                                                @foreach ($item['detail'] as $detail)
                                                <div class="col-lg-3">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <input type="checkbox" id="dc_ls_u" name="facility_id[]"
                                                            value="{{ $detail['facility_id'] }}">
                                                        <label class="ms-2" for="dc_ls_u">{{ $detail['facility_name'] }}</label>
                                                    </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
</div>
</div>
</fieldset>


<h6>Contact</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Main Contact</h3>
            </div>
        </div>
    </div>
    <div id="main-contact">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                    <input type="text" name="main_contact_name[]" class="form-control " placeholder="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" name="main_contact_email[]" class="form-control " placeholder="">
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" name="main_contact_phone[]" class="form-control " placeholder="999-999-9999">
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Position: <span class="text-danger">*</span></label>
                    <input type="text" name="main_contact_position[]" class="form-control " placeholder="">
                </div>
            </div>
    
            <hr>
        </div>
    </div>

    <div id="content-main-contact"></div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" onclick="addMainContact()" class="btn btn-primary btn-sm float-end"><i class="ph-plus"></i> Add Main Contact</button>
            <button type="button" onclick="removeMainContact()" class="btn btn-danger btn-sm float-end"><i class="ph-trash"></i> Remove Main Contact</button>
        </div>
    </div>

    {{-- RESERVATION CONTACT --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Reservation Contact</h3>
            </div>
        </div>
    </div>

    <div id="reservation-contact">
        <div class="row" >
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                    <input type="text" name="reservation_contact_name[]" class="form-control " placeholder="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" name="reservation_contact_email[]" class="form-control " placeholder="">
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" name="reservation_contact_phone[]" class="form-control "
                            placeholder="999-999-9999">
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Position: <span class="text-danger">*</span></label>
                    <input type="text" name="reservation_contact_position[]" class="form-control " placeholder="">
                </div>
            </div>
    
            <hr>
        </div>
    </div>

    <div id="content-reservation-contact"></div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" onclick="addReservationContact()" class="btn btn-primary btn-sm float-end"><i class="ph-plus"></i> Add Reservation Contact</button>
            <button type="button" onclick="removeReservationContact()" class="btn btn-danger btn-sm float-end"><i class="ph-trash"></i> Remove Reservation Contact</button>
        </div>
    </div>
    
    {{-- ACCOUNTING CONTACT --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Accounting Contact</h3>
            </div>
        </div>
    </div>

    <div id="accounting-contact">
        <div class="row" >
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                    <input type="text" name="acounting_contact_name[]" class="form-control " placeholder="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" name="acounting_contact_email[]" class="form-control " placeholder="">
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" name="acounting_contact_phone[]" class="form-control "
                            placeholder="999-999-9999">
                    </div>
                </div>
            </div>
    
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Position: <span class="text-danger">*</span></label>
                    <input type="text" name="acounting_contact_position[]" class="form-control " placeholder="">
                </div>
            </div>

            <hr>
        </div>
    </div>

    <div id="content-accounting-contact"></div>
    <div class="row mb-3">
        <div class="col-md-12">
            <button type="button" onclick="addAccountingContact()" class="btn btn-primary btn-sm float-end"><i class="ph-plus"></i> Add Accounting Contact</button>
            <button type="button" onclick="removeAccountingContact()" class="btn btn-danger btn-sm float-end"><i class="ph-trash"></i> Remove Accounting Contact</button>
        </div>
    </div>
</fieldset>


<h6>Documents</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="file-doc-property"><span>Your browser doesn't have Flash installed.</span></div>
            <div id="inputDoc"></div>
        </div>
    </div>
</fieldset>


<h6>Terms</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Terms & Conditions</h3>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Reception Area : <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input required" type="radio" name="reception_area" id="inlineRadio1" value="1"
                        checked>
                    <label class="form-check-label" for="inlineRadio1">Available 24 Hours</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input required" type="radio" name="reception_area" id="inlineRadio2" value="1">
                    <label class="form-check-label" for="inlineRadio2">Not Available <span class="text-muted">24
                            Hours</span></label>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-in Time (from) : <span class="text-danger">*</span></label>
                <input type="time" name="check_in_from" id="check_in_from" class="form-control required " placeholder="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-in Time (until) : <span class="text-danger">*</span></label>
                <input type="time" name="check_in_until" id="check_in_until" class="form-control required " placeholder="">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-out Time (from): <span class="text-danger">*</span></label>
                <input type="time" name="check_out_from" id="check_out_from" class="form-control required " placeholder="Enter Check-out Time">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-out Time (until): <span class="text-danger">*</span></label>
                <input type="time" name="check_out_until" id="check_out_until" class="form-control required " placeholder="Enter Check-out Time">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Distance to City Center: <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" name="range" class="form-control required " placeholder="Enter Distance to City Center">
                    <span class="input-group-text">KM</span>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Number of Floors: <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="number" name="floors" class="form-control required " placeholder="Enter Number of Floors">
                    <span class="input-group-text">Floors</span>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Cancelation Policy: <span class="text-danger">*</span></label>
                <select name="cancelation_policy" id="" class="form-control required">
                    <option value="1" selected>Cancel 14D prior arrival 50% charge. No Show 50% charge</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Room Release Time Type: <span class="text-danger">*</span></label>
                <select name="release_time_type" id="" class="form-select required">
                    <option value="1" selected>Hours</option>
                    <option value="2" selected>Minutes</option>
                    <option value="3" selected>Seconds</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Room Release After Booking: <span class="text-danger">*</span></label>
                <input type="number" name="release_after_booking" class="form-control required " placeholder="Enter Number">
            </div>
        </div>
    </div>
</fieldset>


<h6>Photos</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Section</label>
                <select name="" id="section-photo" class="form-select required">
                    <option value="lobby">Lobby</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="row" id="other-section-photo" hidden>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="form-label">Other Section</label>
                    <input type="text" class="form-control" id="section" value="lobby" id="input-section-photo"
                        placeholder="Other Section">
                </div>
            </div>
        </div>

        <div class="col-lg-12" id="sectionPhoto">
            <div class="file-photo-property"><span>Your browser doesn't have Flash installed.</span></div>
        </div>
        <div id="inputPhoto"></div>

        <hr>
    </div>
</fieldset>


<h6>Preview</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">

            <!-- Top placement -->
            <div class="card">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-img-actions">
                            <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
                            <div class="card-img-actions-overlay card-img-top">
                                <a href="../../../assets/images/demo/flat/4.png"
                                    class="btn btn-outline-white border-width-2" data-popup="lightbox">
                                    Preview
                                </a>
                                <a href="#" class="btn btn-outline-white border-width-2 ms-2">
                                    Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0" id="content_property_name"></h3>
                                {{-- <div class="ms-auto">
                                    <a class="text-white" data-card-action="reload">
                                        <i class="ph-arrows-clockwise"></i>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- ICON RATING --}}
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-solid fa-star text-warning me-1"></i>
                                <i class="fa-solid fa-star text-warning me-1"></i>
                                <i class="fa-solid fa-star text-warning me-1"></i>
                                <i class="fa-solid fa-star text-secondary me-1"></i>
                                <i class="fa-solid fa-star text-warning me-1"></i>
                            </div>

                            {{-- Homestay --}}
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-house me-1"></i>
                                <span class="">Homestay</span>
                            </div>
                            {{-- LOCATION --}}
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-location-dot me-1"></i>
                                <span class="" id="content_property_address"></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-phone me-1"></i>
                                <span class="" id="content_property_email"></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-phone me-1"></i>
                                <span class="" id="content_property_phone"></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-bed me-1"></i>
                                <span class="" id="content_property_room"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /top placement -->
        </div>
    </div>
</fieldset>
</form>
</div>
@endsection


@push('js')
<script defer
    async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4EtvMrbk-iJtGCuaiZ0DIEcOrf7UoTT0&loading=async&callback=initMap&libraries=map,marker&libraries=places&v=weekly&solution_channel=GMP_CCS_textdirections_v1">
</script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('#location-select').select2({
            placeholder: 'Search for a location',
            minimumInputLength: 3,
            ajax: {
                transport: function(params, success, failure) {
                    var service = new google.maps.places.AutocompleteService();
                    var request = {
                        input: params.data.term,
                        types: ['geocode']
                    };

                    service.getPlacePredictions(request, function(predictions, status) {
                        if (status !== google.maps.places.PlacesServiceStatus.OK) {
                            return failure(status);
                        }

                        var data = {
                            results: $.map(predictions, function(prediction) {
                                return {
                                    id: prediction.place_id,
                                    text: prediction.description
                                };
                            })
                        };

                        success(data);
                    });
                },
                processResults: function(data) {
                    return data;
                }
            }
        });
    });
</script>

{{-- SCRIPT EVENT --}}
<script>
    $(document).on('change', '#address', function() {
        var content = $(this).val();
        $('#content-address').html(content);
        console.log(content);
    });

    // Event listener for when a location is selected
    $('#location-select').on('select2:select', function(e) {
        var placeId = e.params.data.id;
        $('#place-id').val(placeId);
    });
    

    function addMainContact() {
        var elem = $('#main-contact').html();
        $('#content-main-contact').append(elem);
    }

    function addReservationContact(){
        var elem = $('#reservation-contact').html();
        $('#content-reservation-contact').append(elem);
    }

    function addAccountingContact(){
        var elem = $('#accounting-contact').html();
        $('#content-accounting-contact').append(elem);
    }

    $(document).on('change', '#section-photo', function() {
        if ($(this).val() == 'other') {
            $('#input-section-photo').val('other');
            $('#other-section-photo').removeAttr('hidden');
        } else {
            $('#other-section-photo').attr('hidden', true);
            $('#input-section-photo').val($(this).val());
        }
    })

    $(document).on('change', '#check_in_until', function() {
        var dateFrom = $('#check_in_from').val();
        var dateTo = $(this).val();

        if (dateTo < dateFrom) {
            $(this).val(dateFrom);
            alert('Checkin Until tidak boleh kurang dari Checkin From');
        }
    });

    $(document).on('change', '#check_out_until', function() {
        var dateFrom = $('#check_out_from').val();
        var dateTo = $(this).val();

        if (dateTo < dateFrom) {
            $(this).val(dateFrom);
            alert('Checkout Until tidak boleh kurang dari Checkout From');
        }
    });

    $(document).on('change', '#province', function() {
        var provinceId = $(this).val();
        populateCity(provinceId);
    })

    $(document).on('change', '#city', function() {
        var cityId = $(this).val();
        populateDistrict(cityId);
    })

    $(document).on('change', '#district', function() {
        var districtId = $(this).val();
        populateVillage(districtId);
    })

    function removeMainContact() {
        $('#content-main-contact').children().last().remove();
    }

    function removeReservationContact() {
        $('#content-reservation-contact').children().last().remove();
    }

    function removeAccountingContact() {
        $('#content-accounting-contact').children().last().remove();
    }

    $(document).on('input', '#property_name', function() {
        var value = $(this).val();
        $('#content_property_name').text(value);
    })

    $(document).on('input', '#property_address', function() {
        var value = $(this).val();
        $('#content_property_address').text(value);
    })

    $(document).on('input', '#property_phone', function() {
        var value = $(this).val();
        $('#content_property_phone').text('+62 '+value);
    })

    $(document).on('input', '#property_room', function() {
        var value = $(this).val();
        $('#content_property_room').text(value+' Room');
    })

    $(document).on('input', '#property_email', function() {
        var value = $(this).val();
        $('#content_property_email').text(value);
    })
</script>

{{-- MAPS --}}
<script>
    /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
        var map;
        var marker;
        let service;
        let geocoder;
        var latlng = { lat: -6.200000, lng: 106.816666 };

       function initMap() {
            // Set the initial map center and zoom level
            var map = new google.maps.Map(document.getElementById('map'), {
                center: latlng,
                zoom: 8
            });
            marker = new google.maps.Marker({
                position: latlng,
                map: map
            });

            service = new google.maps.places.PlacesService(map);
            geocoder = new google.maps.Geocoder();

            // Populate cities based on country
            populateProvince();

            // Add a click event listener to the map
            map.addListener('click', function(event) {
                // Get the latitude and longitude from the clicked location
                var latitude = event.latLng.lat();
                var longitude = event.latLng.lng();

                // Display the coordinates
                document.getElementById('lat').textContent = latitude;
                document.getElementById('long').textContent = longitude;
                addMarker(event.latLng);
            });

            const input = document.getElementById('pac-input');
            const searchBox = new google.maps.places.SearchBox(input);

            // Bias the SearchBox results towards current map's viewport.
            map.addListener('bounds_changed', () => {
                searchBox.setBounds(map.getBounds());
            });

            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener('places_changed', () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                return;
                }

                // Clear out the old markers.
                if (marker) {
                marker.setMap(null);
                }

                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }

                // Create a marker for each place.
                marker = new google.maps.Marker({
                    map,
                    title: place.name,
                    position: place.geometry.location
                });

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }

                // Update coordinates display (this could be in another element or console)
                console.log('Coordinates:', place.geometry.location.lat(), place.geometry.location.lng());
                });
                map.fitBounds(bounds);
            });
        }

        function populateProvince() {
            const url = 'https://staggingabsensi.labura.go.id/api-wilayah-indonesia/static/api/provinces.json';

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const citiesSelect = document.getElementById('province');
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citiesSelect.appendChild(option);
                    });
                })
                .catch(error => console.error(error));
        }

        function populateCity(province_id) {
            const url = `https://staggingabsensi.labura.go.id/api-wilayah-indonesia/static/api/regencies/${province_id}.json`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const citiesSelect = document.getElementById('city');
                    citiesSelect.innerHTML = '';
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citiesSelect.appendChild(option);
                    });
                })
                .catch(error => console.error(error));
        }

        function populateDistrict(city_id) {
            const url = `https://staggingabsensi.labura.go.id/api-wilayah-indonesia/static/api/districts/${city_id}.json`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const citiesSelect = document.getElementById('district');
                    citiesSelect.innerHTML = '';
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citiesSelect.appendChild(option);
                    });
                })
                .catch(error => console.error(error));
        }

        function populateVillage(district_id) {
            const url = `https://staggingabsensi.labura.go.id/api-wilayah-indonesia/static/api/villages/${district_id}.json`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const citiesSelect = document.getElementById('village');
                    citiesSelect.innerHTML = '';
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citiesSelect.appendChild(option);
                    });
                })
                .catch(error => console.error(error));
        }

        function addMarker(location) {
            // If a marker already exists, set its position to the new location
            if (marker) {
                marker.setPosition(location);
            } else {
                // Create a new marker
                new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        const start = document.getElementById("start").value;
        const end = document.getElementById("end").value;
        const selectedMode = document.getElementById("mode").value;

        directionsService
          .route({
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode[selectedMode],
          })
          .then((response) => {
            directionsRenderer.setDirections(response);
          })
          .catch((e) =>
            window.alert("Directions request failed due to " + status)
          );
      }

      window.initMap = initMap;
</script>

{{-- MULTIPLE UPLOAD --}}
<script>
    /* ------------------------------------------------------------------------------
 *
 *  # Plupload multiple file uploader
 *
 *  Demo JS code for uploader_plupload.html page
 *
 * ---------------------------------------------------------------------------- */


    // Setup module
    // ------------------------------

    const Plupload = function() {


    //
    // Setup module components
    //

    // Bootstrap file upload
    const _componentPlupload = function() {
        if (!$().pluploadQueue) {
            console.warn('Warning - Plupload files are not loaded.');
            return;
        }

        $('.file-doc-property').pluploadQueue({
            runtimes: 'html5, html4, Flash, Silverlight',
            url: '/admin/property/upload-doc',
            chunk_size: '10Mb',
            unique_names: true,
            header: true,
            filters: {
                max_file_size: '10Mb',
                mime_types: [{
                    title: 'Image files',
                    extensions: 'jpg,gif,png,doc,pdf'
                }]
            },
            resize: {
                width: 320,
                height: 240,
                quality: 90
            },
            multipart_params: {
                '_token': '{{ csrf_token() }}'
            },
            init: {
                FileUploaded: function(up, file, info) {
                    // This event is triggered when a file has finished uploading
                    try {
                        var response = JSON.parse(info.response); // Parse the response
                        console.log('File uploaded successfully:', response);
                        // Assuming the response contains an ID
                        if (response.id) {
                            var inputValue = `<input type="hidden" name="property_doc[]" value="`+response.id+`">`
                            $('#inputDoc').append(inputValue);
                        }
                    } catch (e) {
                        console.error('Failed to parse response:', e);
                    }
                },
                Error: function(up, err) {
                    console.log('Upload error:', err);
                }
            }
        });

        $('.file-photo-property').pluploadQueue({
            runtimes: 'html5, html4, Flash, Silverlight',
            url: '/admin/property/upload-photo',
            chunk_size: '10Mb',
            unique_names: true,
            header: true,
            filters: {
                max_file_size: '10Mb',
                mime_types: [{
                    title: 'Image files',
                    extensions: 'jpg,gif,png,doc,pdf'
                }]
            },
            resize: {
                width: 320,
                height: 240,
                quality: 90
            },
            multipart_params: {
                '_token': '{{ csrf_token() }}'
            },
            init: {
                FileUploaded: function(up, file, info) {
                    // This event is triggered when a file has finished uploading
                    try {
                        var response = JSON.parse(info.response); // Parse the response
                        console.log('File uploaded successfully:', response);
                        // Assuming the response contains an ID
                        if (response.id) {
                            var section = $('#section').val();
                            var inputValue = `<input type="hidden" name="property_photo[]" value="`+response.id+`">
                                                <input type="hidden" name="section[]" value="`+section+`">`
                            $('#inputPhoto').append(inputValue);
                            $('#section').val('lobby');

                            _componentPlupload();

                        }
                    } catch (e) {
                        console.error('Failed to parse response:', e);
                    }
                },
                Error: function(up, err) {
                    console.log('Upload error:', err);
                }
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentPlupload();
        }
    }
    }();


    // Initialize module
    // ------------------------------

    document.addEventListener('DOMContentLoaded', function() {
    Plupload.init();
    });

</script>
@endpush