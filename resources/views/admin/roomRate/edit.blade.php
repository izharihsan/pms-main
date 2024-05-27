@extends('layouts.admin')
@section('title', 'Edit Room Rate')
@section('room_rates', 'active')

@section('breadcrumb')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <div class="row">
                <h4 class="page-title mb-0" style="margin-left: 5%;">
                    Home - <span class="fw-normal">Room Rates</span>
                </h4>
                <h4 class="mb-0" style="margin-left: 3%;">{{ $property !== null ? $property->name : '-'}}</h4>
            </div>

            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
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
                            <h3>Edit Room Rate</h3>
                        </div>
                        <form action="#" method="PUT" id="submitform">
                            @csrf

                            <input type="hidden" id="room_rate_id" value="{{ $data->id }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date <span class="text-danger">*</span></label>
                                        <input type="date" name="start_date" class="form-control required" placeholder="" value="{{ $data->start_date }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date <span class="text-danger">*</span></label>
                                        <input type="date" name="end_date" class="form-control required" placeholder="" value="{{ $data->end_date }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Rooms <span class="text-danger">*</span></label>
                                    <select class="form-control multiselect" aria-label="Default select example" name="rooms_id[]" multiple="multiple" disabled>                       
                                        <option value="">-- Pilih --</option>
                                        @foreach ($room as $item)
                                            <option value="{{ $item->id }}" @if(in_array($item->id, $room_explode)) selected @endif>{{ $item->room_name }}</option>
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
                                <button id="submitBtn" type="submit" class="ms-auto btn btn-primary" disabled>Apply</button>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>

            <form id="form_details" action="{{ route('admin.room-rates.store_details') }}" method="POST">
                @csrf

                <input id="room_id" type="hidden" name="room_rates_id" value="{{ $data->id }}">
                <div class="card" id="card_rate_d">
                    <div class="card-body row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <h3>Room Rate Detail</h3>
                            </div>

                            <div id="card_details">
                                @foreach ($rooms_details as $item)
                                    @php 
                                        $rate_plan = App\Models\RatePlan::where('connected_rooms', 'LIKE', '%'. $item->room_name .'%')->get();
                                    @endphp

                                    <input type="hidden" name="room_id_{{ $item->id }}" value="{{ $item->id }}">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="mb-3">
                                                <h5>{{ $item->room_name }}</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="mb-3">
                                                        <label class="form-label">Rate Plan</label>
                                                        <select class="form-select" aria-label="Default select example" name="rate_plan[{{ $item->id }}]">
                                                            <option selected>Serch Rate Plan</option>
                                                            @foreach ($rate_plan as $item_rate)
                                                                @php
                                                                    $room_rates_d = App\Models\RoomRatesDetails::where('room_rates_id', $data->id)
                                                                                ->where('rate_plan_id', $item_rate->id)
                                                                                ->first();   

                                                                    // dd($room_rates_d);
                                                                //    die(var_dump($item_rate));
                                                                @endphp
                                                                
                                                                <option value="{{ $item_rate->id }}" @if($room_rates_d) @if($item_rate->id == $room_rates_d->rate_plan_id) selected @endif @endif>{{ $item_rate->name }}</option>
                                                            @endforeach
                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <label class="form-check-label mb-2" for="flexSwitchCheckChecked">Stop Sell</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="stop_sell[{{ $item->id }}]" type="checkbox" role="switch" id="flexSwitchCheckChecked" @if($room_rates_d) @if($room_rates_d->stop_sell == true) checked @endif @endif>
                                                    </div>
                                                </div>
                                                @php
                                                    $minimum_rate = App\Models\RoomRatesDetails::where('room_rates_id', $data->id)
                                                                ->where('room_id', $item->id)
                                                                ->first();   
                                                @endphp

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Rate <span class="text-danger">(Minimum rate: IDR {{ number_format($item->min_rate, 0) }})</span></label>
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <input type="text" name="currency_{{ $item->id }}" value="IDR" class="form-control required" placeholder="">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" name="minimum_rate[{{ $item->id }}]" class="form-control required" placeholder="" value="{{ $minimum_rate->minimum_rate }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex align-items-end flex-nowrap">
                            <div class="ms-auto">
                                <a href="{{ route('admin.room-rates.index') }}" type="button" class="btn btn-outline-primary">Cancel</a>
                                <button id="confirmation" type="submit" class="btn btn-primary">Save</button>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
         $('#confirmation').click(function() {
            event.preventDefault();

            Swal.fire({
                title: 'Are You Sure ?',
                text: 'Are you sure you want to save data',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Save It!'
            }).then((result) => {
                // If user confirms, submit the form
                if (result.isConfirmed) {
                    $('#form_details').submit();
                }
            });
        });

        $('#submitBtn').click(function() {
            event.preventDefault();
            var room_rate_id = $('#room_rate_id').val();

            $.ajax({
                url: "/admin/room-rates/" + room_rate_id,
                type: 'PUT',
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