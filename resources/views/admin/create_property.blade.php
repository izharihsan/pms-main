@extends('layouts.admin')

@section('title', 'Create Property')

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Create Property</h6>
    </div>

    <form class="wizard-form steps-basic" action="#">
        <h6>General</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Property Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Legal Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Total Room Number: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Business Identification Number (NIB): <span
                                class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <p>Property Styles :</p>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <input type="checkbox" class="appearance-none border-none focus:outline-none"
                                            hidden id="cc_li_c" checked="">
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">One</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <input type="checkbox" class="appearance-none border-none focus:outline-none"
                                            hidden id="cc_li_c" checked="">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Two</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <input type="checkbox" class="appearance-none border-none focus:outline-none"
                                            hidden id="cc_li_c" checked="">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Three</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <input type="checkbox" class="appearance-none border-none focus:outline-none"
                                            hidden id="cc_li_c" checked="">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Four</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <div class="border p-3 rounded">
                                    <div class="form-check form-check-inline text-center">
                                        <input type="checkbox" class="appearance-none border-none focus:outline-none"
                                            hidden id="cc_li_c" checked="">
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <i class="ph-star"></i>
                                        <p class="form-check-p" for="cc_li_c">Five</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Street Address: <span class="text-danger">*</span></label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>

                {{-- Property Address --}}
                <div class="col-lg-12">
                    <div class="mb-3">
                        <h3>Property Address</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">City: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">District: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Village: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Postal Code: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Description: <span class="text-danger">*</span></label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="mb-3">
                    <h3>Property Type and Style</h3>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label">Property Type: <span class="text-danger">*</span></label>
                    <select name="" id="" class="form-control">
                        <option value="">Resort</option>
                        <option value="">Resort</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <p>Property Styles :</p>
                    @for ($i = 0; $i < 10; $i++) <div class="col-lg-3">
                        <div class="mb-3">
                            <div class="border p-3 rounded">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="cc_li_c" checked="">
                                    <label class="form-check-label" for="cc_li_c">Checked</label>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </fieldset>
</div>

<h6>Facitilies</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <p class="fw-semibold">Left stacked</p>
                <div class="accordion" id="accordion_collapsed">
                    @for ($i = 1; $i < 15; $i++) <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapsed_item{{ $i }}"
                                aria-expanded="false">
                                Sports & Recreation
                            </button>
                        </h2>
                        <div id="collapsed_item{{ $i }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordion_collapsed" style="">
                            <div class="accordion-body">
                                <div class="border p-3 rounded">
                                    <div class="row">
                                        @for ($j = 0; $j < 20; $j++) <div class="col-lg-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <input type="checkbox" id="dc_ls_u">
                                                <label class="ms-2" for="dc_ls_u">Data</label>
                                            </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endfor
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

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Email: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Position: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>

        <hr>

        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Reservation Contact</h3>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Email: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Position: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>

        <hr>

        <div class="col-lg-12">
            <div class="mb-3">
                <h3>Accounting Contact</h3>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Full Name: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Email: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Phone Number: <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Position: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>


</fieldset>


<h6>Documents</h6>
<fieldset>
    <div class="row">
        <div class="col-lg-12">
            <div class="file-uploader" id="o_1ht943ujc1bkr1lknghq1pn7vc22" style="position: relative;"><div class="plupload_wrapper plupload_scroll"><div id="o_1ht943ujc1bkr1lknghq1pn7vc22_container" class="plupload_container" title="Using runtime: html5"><div class="plupload"><div class="plupload_header"><div class="plupload_header_content"><div class="plupload_header_title">Select files</div><div class="plupload_header_text">Add files to the upload queue and click the start button.</div></div></div><div class="plupload_content"><div class="plupload_filelist_header"><div class="plupload_file_name">Filename</div><div class="plupload_file_action">&nbsp;</div><div class="plupload_file_status"><span>Status</span></div><div class="plupload_file_size">Size</div><div class="plupload_clearer">&nbsp;</div></div><ul id="o_1ht943ujc1bkr1lknghq1pn7vc22_filelist" class="plupload_filelist"><li class="plupload_droptext">Drag files here.</li></ul><div class="plupload_filelist_footer"><div class="plupload_file_name"><div class="plupload_buttons"><a href="#" class="plupload_button plupload_add" id="o_1ht943ujc1bkr1lknghq1pn7vc22_browse" style="position: relative; z-index: 1;">Add Files</a><a href="#" class="plupload_button plupload_start plupload_disabled">Start Upload</a></div><span class="plupload_upload_status"></span></div><div class="plupload_file_action"></div><div class="plupload_file_status"><span class="plupload_total_status">0%</span></div><div class="plupload_file_size"><span class="plupload_total_file_size">0 b</span></div><div class="plupload_progress"><div class="plupload_progress_container"><div class="plupload_progress_bar"></div></div></div><div class="plupload_clearer">&nbsp;</div></div></div></div></div><input type="hidden" id="o_1ht943ujc1bkr1lknghq1pn7vc22_count" name="o_1ht943ujc1bkr1lknghq1pn7vc22_count" value="0"></div><div id="html5_1ht943uk0o7914om1guq1k126od6_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 334px; left: 22px; width: 89px; height: 40px; overflow: hidden; z-index: 0;"><input id="html5_1ht943uk0o7914om1guq1k126od6" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept=".jpg,.gif,.png" tabindex="-1"></div></div>
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
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Available 24 Hours</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Not Available <span class="text-muted">24 Hours</span></label>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-in Time (from) : <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-in Time (until) : <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-out Time (from): <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Check-out Time (until): <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Distance to City Center: <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Number of Floors: <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
            </div>
        </div>
    
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Cancelation Policy: <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Room Release Time Type: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Room Release After Booking: <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control required" placeholder="John Doe">
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
                <select name="section" id="" class="form-select">
                    <option value="option1">Lobby</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="file-uploader" id="o_1ht943ujc1bkr1lknghq1pn7vc22" style="position: relative;"><div class="plupload_wrapper plupload_scroll"><div id="o_1ht943ujc1bkr1lknghq1pn7vc22_container" class="plupload_container" title="Using runtime: html5"><div class="plupload"><div class="plupload_header"><div class="plupload_header_content"><div class="plupload_header_title">Select files</div><div class="plupload_header_text">Add files to the upload queue and click the start button.</div></div></div><div class="plupload_content"><div class="plupload_filelist_header"><div class="plupload_file_name">Filename</div><div class="plupload_file_action">&nbsp;</div><div class="plupload_file_status"><span>Status</span></div><div class="plupload_file_size">Size</div><div class="plupload_clearer">&nbsp;</div></div><ul id="o_1ht943ujc1bkr1lknghq1pn7vc22_filelist" class="plupload_filelist"><li class="plupload_droptext">Drag files here.</li></ul><div class="plupload_filelist_footer"><div class="plupload_file_name"><div class="plupload_buttons"><a href="#" class="plupload_button plupload_add" id="o_1ht943ujc1bkr1lknghq1pn7vc22_browse" style="position: relative; z-index: 1;">Add Files</a><a href="#" class="plupload_button plupload_start plupload_disabled">Start Upload</a></div><span class="plupload_upload_status"></span></div><div class="plupload_file_action"></div><div class="plupload_file_status"><span class="plupload_total_status">0%</span></div><div class="plupload_file_size"><span class="plupload_total_file_size">0 b</span></div><div class="plupload_progress"><div class="plupload_progress_container"><div class="plupload_progress_bar"></div></div></div><div class="plupload_clearer">&nbsp;</div></div></div></div></div><input type="hidden" id="o_1ht943ujc1bkr1lknghq1pn7vc22_count" name="o_1ht943ujc1bkr1lknghq1pn7vc22_count" value="0"></div><div id="html5_1ht943uk0o7914om1guq1k126od6_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 334px; left: 22px; width: 89px; height: 40px; overflow: hidden; z-index: 0;"><input id="html5_1ht943uk0o7914om1guq1k126od6" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept=".jpg,.gif,.png" tabindex="-1"></div></div>
        </div>

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
                                <a href="../../../assets/images/demo/flat/4.png" class="btn btn-outline-white border-width-2" data-popup="lightbox">
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
                                <h3 class="mb-0">Bali Spa</h3>
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
                                <i class="fa-solid fa-building  me-1"></i>
                                <span class="">Homestay</span>
                            </div>
                            {{-- LOCATION --}}
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-location-dot  me-1"></i>
                                <span class="">Jl. Gatot Subroto Barat No. 282</span>
                            </div>
                            {{-- BUTTON Manage Property --}}
                            <div class="d-flex align-items-center">
                                <a href="" class="btn btn-primary btn-block mt-3">
                                    Manage Property
                                </a>
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