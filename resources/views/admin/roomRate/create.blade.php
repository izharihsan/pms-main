@extends('layouts.admin')
@section('title', 'Add Room Rate')
@section('room_rates', 'active')

@section('breadcrumb')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Room Rates</span>
            </h4>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                <div class="dropdown w-100 w-sm-auto">
                    <a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
                        <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                        <div class="me-auto me-lg-1">
                            <div class="fs-sm text-muted mb-1">Customer</div>
                            <div class="fw-semibold">Tesla Motors Inc</div>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
                        <div class="d-flex align-items-center p-3">
                            <h6 class="fw-semibold mb-0">Customers</h6>
                            <a href="#" class="ms-auto">
                                View all
                                <i class="ph-arrow-circle-right ms-1"></i>
                            </a>
                        </div>
                        <a href="#" class="dropdown-item active py-2">
                            <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Tesla Motors Inc</div>
                                <div class="fs-sm text-muted">42 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">De Bijenkorf</div>
                                <div class="fs-sm text-muted">49 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Royal Dutch Airlines</div>
                                <div class="fs-sm text-muted">18 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">Royal Dutch Shell</div>
                                <div class="fs-sm text-muted">54 users</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item py-2">
                            <img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px me-2" alt="">
                            <div>
                                <div class="fw-semibold">BP plc</div>
                                <div class="fs-sm text-muted">23 users</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

                <div class="d-inline-flex mt-3 mt-sm-0">
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-warning"></span>
                    </a>
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face1.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </a>
                    <a href="#" class="status-indicator-container ms-1">
                        <img src="../../../assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-danger"></span>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
                        <i class="ph-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="#" class="breadcrumb-item">Home</a>
                <span class="breadcrumb-item active">Room Rates</span>
            </div>

            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

        <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
            <div class="d-lg-flex mb-2 mb-lg-0">
                <a href="#" class="d-flex align-items-center text-body py-2">
                    <i class="ph-lifebuoy me-2"></i>
                    Support
                </a>

                <div class="dropdown ms-lg-3">
                    <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                        <i class="ph-gear me-2"></i>
                        <span class="flex-1">Settings</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                        <a href="#" class="dropdown-item">
                            <i class="ph-shield-warning me-2"></i>
                            Account security
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-chart-bar me-2"></i>
                            Analytics
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ph-lock-key me-2"></i>
                            Privacy
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="ph-gear me-2"></i>
                            All settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-body row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <h3>Add Room Rate</h3>
                        </div>
                        <form action="#" method="POST" id="submitform">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" class="form-control required" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" class="form-control required" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Rooms <span class="text-danger">*</span></label>
                                    <select class="form-control multiselect" aria-label="Default select example" name="rooms_id[]" multiple="multiple">                       
                                        <option value="">-- Pilih --</option>
                                        @foreach ($room as $item)
                                            <option value="{{ $item->id }}">{{ $item->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Select All Room
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-end flex-nowrap">
                                <button id="submitBtn" type="submit" class="ms-auto btn btn-primary">Apply</button>
                            </div>
                        </form>
                    </div>
                 

                </div>
            </div>

            <form action="{{ route('admin.room-rates.store_details') }}" method="POST">
                @csrf

                <input id="room_id" type="hidden" name="room_rates_id">
                <div class="card" id="card_rate_d">
                    <div class="card-body row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <h3>Room Rate Detail</h3>
                            </div>

                            <div id="card_details">
                              
                            </div>
                        </div>
                        <div class="d-flex align-items-end flex-nowrap">
                            <div class="ms-auto">
                                <button type="button" class="btn btn-outline-primary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                                {{-- <a href="javascript::void(0)" onclick="edit()"><i class="ph ph-eye f-16 mr-15"></i></a>
                                <a href="javascript::void(0)" onclick="confirmSave(event)"><i class="ph ph-trash f-16 text-danger"></i></a> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <!-- /content area -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

<div class="modal fade" id="modal_update_data" tabindex="-1" role="dialog" aria-labelledby="modal_update_dataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_update_dataLabel">Update Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="formEdit">
                ...
            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#card_rate_d').hide();
        });
    </script>

    <script>
        $('#submitBtn').click(function() {
            event.preventDefault();

            $.ajax({
                url: "{{ route('admin.room-rates.store') }}",
                type: 'POST',
                data: $("#submitform").serialize(),
                success: function(data) {
                    var response = JSON.parse(data);
                    $('#room_id').val(response.room_rate.id);

                    var ratePlansByRoomId = {};
                    response.rate_plans.forEach(function(ratePlan) {
                        var roomId = ratePlan.room.id;
                        if (!ratePlansByRoomId[roomId]) {
                            ratePlansByRoomId[roomId] = [];
                        }
                        ratePlansByRoomId[roomId].push(ratePlan.ratePlans);
                    });

                    // console.log(ratePlansByRoomId);
                    $('#card_details').empty();
                    response.rooms.forEach(function(room) {
                        var ratePlans = ratePlansByRoomId[room.id] || [];
                        // console.log(ratePlans);
                 
                        var cardHtml = `
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h5>${room.room_name}</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="mb-3">
                                                <label class="form-label">Rate Plan</label>
                                                <select class="form-select" aria-label="Default select example" name="rate_plan[`+room.id+`]">
                                                    <option selected>Search Rate Plan</option>`;
                                                    ratePlans.forEach(function(ratePlanSub) {
                                                        ratePlanSub.forEach(element => {
                                                            cardHtml += `<option value="${element.id}">${element.name}</option>`;
                                                        });
                                                    });
                                                cardHtml += `</select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <label class="form-check-label mb-2" for="flexSwitchCheckChecked${room.id}">Stop Sell</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked${room.id}" checked name="stop_sell[`+room.id+`]">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Rate <span class="text-danger">(Minimum rate: ${room.min_rate})</span></label>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <input type="text" name="currency_`+room.id+`" value="IDR" class="form-control required" placeholder="">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="minimum_rate[`+room.id+`]" class="form-control required" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;

                        // Append the new card to the card_details container
                        $('#card_details').append(cardHtml);
                    });

                    // console.log(response);
                    // $('#formEdit').html(data);
                    // $('#modal_update_data').modal('show');
                    // actionCloseModals();
                    $('#card_rate_d').show();
                }
            })
        });

        function edit() {
            $.ajax({
                url: '/property/edit',
                type: 'GET',
                success: function(data) {
                    $('#formEdit').html(data);
                    $('#modal_update_data').modal('show');
                    actionCloseModals();
                }
            })
        }

        function confirmDelete(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#dubmitzform').submit()
                    var postForm = {
                        '_token': '{{ csrf_token() }}',
                        '_method': 'DELETE',
                    };
                    $.ajax({
                            url: '/employee/' + id,
                            type: 'POST',
                            data: postForm,
                            dataType: 'json',
                        })
                        .done(function(data) {
                            Swal.fire('Deleted!', data['message'], 'success');
                            location.reload();
                        })
                        .fail(function() {
                            Swal.fire('Error!', 'An error occurred while deleting the record.', 'error');
                        });
                }
            });
        }

        function confirmSave(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Are you sure you want to save this data? Please make sure all data is correct!',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, Update it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#submitform').submit()
                }
            });
        }
    </script>
@endpush