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
                <div class="col-lg-12 mt-3">
                    <div class="mb-3">
                        <h3>Room Specification</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Room Name: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Room Type: <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control required" placeholder="John Doe">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Number of Room: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                            <span class="input-group-text">Room</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Max Occupancy: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="phone" class="form-control required" placeholder="999-999-9999">
                            <span class="input-group-text">Persons</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="mb-3">
                        <h3>Bedroom</h3>
                        <hr>
                    </div>
                </div>

                <div id="bedroom-template" class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label class="form-label">Bedroom 1</label>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <div class="input-group">
                                    <button type="button" class="btn btn-light btn-icon"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="ph-minus ph-sm"></i>
                                    </button>
                                    <input class="form-control form-control-number text-center" type="number"
                                        name="number" value="5">
                                    <button type="button" class="btn btn-light btn-icon"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="ph-plus ph-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <select name="section" id="" class="form-select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="bedroom"></div>

                <div class="col-lg-12">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary btn-icon" onclick="addBedroom()">
                            <i class="ph-plus ph-sm"></i>
                            Add Bedroom
                        </button>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="mb-3">
                        <h3>Room Size</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Room Width : <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                            <span class="input-group-text">Meters</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Length: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                            <span class="input-group-text">Meters</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Minimum Rate: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Extra Guest Fee: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="mb-3">
                        <h3>Extr Bed Information</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Max extra Bed: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                            <span class="input-group-text">Pieces</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Price of Extra Bed: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="text" name="name" class="form-control required" placeholder="John Doe">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <h6>Facitilies</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="mb-3">
                        <h3>Room Facitilies</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mb-3">
                        <p class="fw-semibold">Entertainment</p>
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
                                        <div class="row">
                                            @for ($j = 0; $j < 20; $j++) <div class="col-lg-3 mb-2">
                                                <div class="border p-3 rounded">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <input type="checkbox" id="dc_ls_u">
                                                        <label class="ms-2" for="dc_ls_u">Data</label>
                                                    </div>
                                                </div>
                                        </div>
                                        @endfor
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
            <div class="file-uploader" id="o_1ht943ujc1bkr1lknghq1pn7vc22" style="position: relative;">
                <div class="plupload_wrapper plupload_scroll">
                    <div id="o_1ht943ujc1bkr1lknghq1pn7vc22_container" class="plupload_container"
                        title="Using runtime: html5">
                        <div class="plupload">
                            <div class="plupload_header">
                                <div class="plupload_header_content">
                                    <div class="plupload_header_title">Select files</div>
                                    <div class="plupload_header_text">Add files to the upload queue and click
                                        the start
                                        button.</div>
                                </div>
                            </div>
                            <div class="plupload_content">
                                <div class="plupload_filelist_header">
                                    <div class="plupload_file_name">Filename</div>
                                    <div class="plupload_file_action">&nbsp;</div>
                                    <div class="plupload_file_status"><span>Status</span></div>
                                    <div class="plupload_file_size">Size</div>
                                    <div class="plupload_clearer">&nbsp;</div>
                                </div>
                                <ul id="o_1ht943ujc1bkr1lknghq1pn7vc22_filelist" class="plupload_filelist">
                                    <li class="plupload_droptext">Drag files here.</li>
                                </ul>
                                <div class="plupload_filelist_footer">
                                    <div class="plupload_file_name">
                                        <div class="plupload_buttons"><a href="#" class="plupload_button plupload_add"
                                                id="o_1ht943ujc1bkr1lknghq1pn7vc22_browse"
                                                style="position: relative; z-index: 1;">Add Files</a><a href="#"
                                                class="plupload_button plupload_start plupload_disabled">Start
                                                Upload</a></div><span class="plupload_upload_status"></span>
                                    </div>
                                    <div class="plupload_file_action"></div>
                                    <div class="plupload_file_status"><span class="plupload_total_status">0%</span>
                                    </div>
                                    <div class="plupload_file_size"><span class="plupload_total_file_size">0
                                            b</span>
                                    </div>
                                    <div class="plupload_progress">
                                        <div class="plupload_progress_container">
                                            <div class="plupload_progress_bar"></div>
                                        </div>
                                    </div>
                                    <div class="plupload_clearer">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div><input type="hidden" id="o_1ht943ujc1bkr1lknghq1pn7vc22_count"
                        name="o_1ht943ujc1bkr1lknghq1pn7vc22_count" value="0">
                </div>
                <div id="html5_1ht943uk0o7914om1guq1k126od6_container" class="moxie-shim moxie-shim-html5"
                    style="position: absolute; top: 334px; left: 22px; width: 89px; height: 40px; overflow: hidden; z-index: 0;">
                    <input id="html5_1ht943uk0o7914om1guq1k126od6" type="file"
                        style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"
                        multiple="" accept=".jpg,.gif,.png" tabindex="-1">
                </div>
            </div>
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="datatable-scroll">
                            
                            <table class="table datatable-selection-single dataTable no-footer" id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" aria-label="Name: activate to sort column descending"
                                            aria-sort="ascending">No.</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending">Room Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending">Number of Rooms</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending">Status
                                        <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                            style="width: 100px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 10; $i++)
                                        <tr class="event">
                                            <td class="sorting_1">{{ $i }}</td>
                                            <td>Room {{ $i }}</td>
                                            <td>{{ $i }}</td>
                                            <td><span class="badge bg-danger bg-opacity-10 text-danger">Active</span></td>
                                            <td class="text-center">
                                                <div class="d-inline-flex">
                                                    <div class="dropdown">
                                                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                            <i class="ph-list"></i>
                                                        </a>
        
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#" class="dropdown-item">
                                                                <i class="ph-eye me-2"></i>
                                                                Detail
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class="ph-pen me-2"></i>
                                                                Edit
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class="ph-trash me-2"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="datatable-footer">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1
                                to 10 of 15 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination pagination-flat">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                            class="page-link rounded">←</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0"
                                            data-dt-idx="1" tabindex="0" class="page-link rounded">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                            data-dt-idx="2" tabindex="0" class="page-link rounded">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                            aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                            class="page-link rounded">→</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ALERT WARNING --}}
            <div class="alert alert-warning">
                <div class="d-flex">
                    <i class="ph-warning-circle me-3"></i>
                    <div class="text">
                        <h6 class="mb-0">Please solve the following problems</h6>
                        <p class="mb-0">This is a warning alert</p>
                        <ol>
                            <li>The number of rooms must be equal to the total room in property</li>
                            <li>Limited room availability! Only 2 rooms left</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
</form>
</div>
@endsection

@push('js')
<script>
    function addBedroom() {
            let html = $('#bedroom-template').html();
            $('#bedroom').append(html);
        }
</script>
@endpush