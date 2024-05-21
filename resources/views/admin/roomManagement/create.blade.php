@extends('layouts.admin')

@section('title', 'Create Room')

@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Create Room</h6>
    </div>

    <form class="wizard-form steps-basic" id="formSubmit" method="POST" action="{{ route('admin.room-management.store') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="property_id" value="{{ $property->id }}">
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
                        <input type="text" name="room_name" id="room_name" class="form-control required" placeholder="Enter Room Name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Room Type: <span class="text-danger">*</span></label>
                        <select name="room_type_id" id="" class="form-select">
                            <option value=""></option>
                            @foreach ($room_type as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Number of Room: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" name="number_of_room" id="number_of_room" class="form-control required"
                                placeholder="Enter Number of Room">
                            <span class="input-group-text">Room</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Max Occupancy: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="umber" name="max_occupancy" class="form-control required" placeholder="">
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
                            <input type="number" name="room_width" class="form-control required" placeholder="">
                            <span class="input-group-text">Meters</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Length: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" name="room_length" class="form-control required" placeholder="">
                            <span class="input-group-text">Meters</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Minimum Rate: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="number" name="min_rate" class="form-control required" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Extra Guest Fee: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="number" name="extra_guest_fee" class="form-control required" placeholder="">
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
                            <input type="number" name="max_extra_bed" class="form-control required" placeholder="">
                            <span class="input-group-text">Pieces</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Price of Extra Bed: <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">IDR</span>
                            <input type="number" name="price_of_extra_bed" class="form-control required" placeholder="">
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
                            @foreach ($room_facilities as $key => $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-semibold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsed_item{{ $key }}"
                                        aria-expanded="false">
                                        {{ $item['category_name'] }}
                                    </button>
                                </h2>
                                <div id="collapsed_item{{ $key }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion_collapsed" style="">
                                    <div class="accordion-body">
                                        <div class="row">
                                            @foreach ($item['detail'] as $detail)
                                            <div class="col-lg-3 mb-2">
                                                <div class="border p-3 rounded">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <input type="checkbox" id="dc_ls_u" name="facility_id[]" value="{{ $detail['facility_id'] }}">
                                                        <label class="ms-2" for="dc_ls_u">{{ $detail['facility_name'] }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
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

        <h6>Photos</h6>
        <fieldset>
            <div class="row" id="formPhotos">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Section</label>
                        <input type="text" name="room_section[]" class="form-control" placeholder="Enter Section">
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <input type="file" class="file-input" name="room_photo[]">
                </div>

                <hr>
            </div>

            <div id="input-photos" class="row"></div>

            <div class="row">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" onclick="addPhotos()">Add Photos</button>
                </div>
            </div>
        </fieldset>


        <h6>Preview</h6>
        <fieldset>
            <div class="row">
                <div class="col-lg-12">

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
                                        <h3 class="mb-0">{{ $property->name }}</h3>
                                    </div>

                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                        <i class="fa-solid fa-star text-secondary me-1"></i>
                                        <i class="fa-solid fa-star text-warning me-1"></i>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-building  me-1"></i>
                                        <span class="">{{ ucfirst($property->category) }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot  me-1"></i>
                                        <span class="">{{ $property->address->address ?? null }}</span>
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
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column descending" aria-sort="ascending">
                                                    No.</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending">Room
                                                    Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                    colspan="1" aria-label="Age: activate to sort column ascending">Number of
                                                    Rooms</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                    colspan="1" aria-label="Start date: activate to sort column ascending">
                                                    Status
                                                <th class="text-center sorting_disabled" rowspan="1" colspan="1"
                                                    aria-label="Actions" style="width: 100px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($property->rooms as $key => $item)
                                                <tr class="event">
                                                    <td class="sorting_1">{{ $key + 1 }}</td>
                                                    <td>{{ $item->room_name }}</td>
                                                    <td>{{ $item->number_of_room }}</td>
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <span class="badge bg-success bg-opacity-10 text-success">Active</span>
                                                        @elseif($item->status == 2)
                                                            <span class="badge bg-danger bg-opacity-10 text-danger">Inactive</span>
                                                        @endif
                                                    </td>
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
                                            @endforeach
                                            <tr class="event">
                                                <td>{{ count($property->rooms) + 1 }}</td>
                                                <td id="roomNamePreview"></td>
                                                <td id="numberOfRoomPreview"></td>
                                                <td><span class="text-danger">Belum Disimpan</span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="datatable-footer">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                        Showing 1
                                        to 10 of 15 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <ul class="pagination pagination-flat">
                                            <li class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                                    data-dt-idx="0" tabindex="0" class="page-link rounded">←</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                                    class="page-link rounded">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                                    class="page-link rounded">2</a></li>
                                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0"
                                                    class="page-link rounded">→</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
<script src="{{ asset('assets/demo/pages/uploader_bootstrap.js') }}"></script>

<script>
    var bedroomCount = 1;
    function addBedroom() {
            let html = `<div id="bedroom-template" class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label class="form-label">Bedroom `+bedroomCount+`</label>
                                <input type="hidden" name="bedroom_name[]" value="Bedroom `+bedroomCount+`">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <div class="input-group">
                                    <button type="button" class="btn btn-light btn-icon"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="ph-minus ph-sm"></i>
                                    </button>
                                    <input class="form-control form-control-number text-center" type="number" name="qty[]" value="1">
                                    <button type="button" class="btn btn-light btn-icon"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="ph-plus ph-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <select name="bedroom_type_id[]" id="" class="form-select">
                                    <option value="" selected disabled>-- Select Bed Type --</option>
                                    @foreach ($bed_type as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>`
        $('#bedroom').append(html);

        bedroomCount++;
    }

    function addPhotos() {
        var elem = $('#formPhotos').html();

        $('#input-photos').append(elem);
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

    $(document).on('input', '#room_name', function() {
        var value = $(this).val();
        console.log(value);
        $('#roomNamePreview').text(value);
    })
    $(document).on('input', '#number_of_room', function() {
        var value = $(this).val();
        $('#numberOfRoomPreview').text(value);
    })
</script>
@endpush