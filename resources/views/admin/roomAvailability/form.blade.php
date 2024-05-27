@extends('layouts.admin')
@section('title', 'Room Availability')
@section('room_availability', 'active')
@section('breadcrumb')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <div class="row">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Room Availability</span>
                </h4>
                <h4 class="mb-0">{{ $property !== null ? $property->name : '-'}}</h4>    
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
                <span class="breadcrumb-item active">Room Availability</span>
            </div>

            <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
@section('rate_plan', 'active')

<?php
    $selected_room = null;

    if (isset($data) && $data->connected_room) {
        $selected_room = $data->connected_room;
    }

    $selected_update = null;

    if (isset($data) && $data->update_data) {
        $selected_room = $data->update_data;
    }
?>

<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="mb-0 text-primary">Room Availability</h5>
                            <h6 class="mb-0">Bali Bird Resort</h6>
                            {{-- <span class="mb-0">Rate Plan Management</span> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6>Add New Rate Plan</h6>
                    <form id="myForm"  action="{{ route('admin.room_availability.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="" class="fw-bold">Start Date<strong class="text-danger">*</strong></label>
                                <input type="date" name="start_date" class="form-control" required placeholder="E.g Room Only" @isset($data) value="{{ $data->start_date }}" @endisset>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="fw-bold">End Date<strong class="text-danger">*</strong></label>
                                <input type="date" name="end_date" class="form-control" required placeholder="Rate plan description" @isset($data) value="{{ $data->end_date }}" @endisset>
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Connected Room</label><br>
                                @foreach ($room as $item)
                                    <input type="checkbox" id="{{ $item->room_name }}" name="connected_rooms[{{ $item->room_name }}]">
                                    <label for="breakfast">{{ $item->room_name }}</label>
                                @endforeach
                
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Choose To Update</label><br>
                                <input type="checkbox" id="availability" name="update_data[availability]">
                                <label for="breakfast">Availability</label>
                                <input type="checkbox" id="cta" name="update_data[cta]">
                                <label for="breakfast">CTA</label>
                                <input type="checkbox" id="ctd" name="update_data[ctd]">
                                <label for="breakfast">CTD</label>
                                <input type="checkbox" id="stop_sell" name="update_data[stop_sell]">
                                <label for="breakfast">Stop Sell</label>
                                <input type="checkbox" id="stop_sell_limit" name="update_data[stop_sell_limit]">
                                <label for="breakfast">Stop Sell Limit</label>
                            </div>
                            <div class="form-group" style="margin-top: 5%;">
                                <label for="" class="fw-bold">Availability<strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" required placeholder="E.g 40" name="availability" @isset($data) value="{{ $data->availability }}" @endisset>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">CTA</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">CTD</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>

                                
                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">Stop Sell</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 5%;">
                                <label for="" class="fw-bold">Stop Sell Limit<strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" required placeholder="E.g 40" name="stop_sell_limit" @isset($data) value="{{ $data->stop_sell_limit }}" @endisset>
                            </div>
                        </div>
                        <div class="float-end mt-4">
                            <a href="{{ route('admin.room_availability.index') }}" class="btn btn-sm btn-outline-primary">Cancel</a>
                            <button id="submitBtn" type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#submitBtn').click(function() {
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
                    $('#myForm').submit();
                }
            });
           
        });

        var selected_room = "<?php echo $selected_room; ?>";
        if (selected_room !== null) {
            var selected_room_array = selected_room.split(', ');

            selected_room_array.forEach(function(room) {
                var checkbox = document.getElementById(room.trim());
                if (checkbox) {
                    checkbox.checked = true;
                }
            });
        }

        var selected_update = "<?php echo $selected_update; ?>";
        if (selected_update !== null) {
            var selected_update_array = selected_update.split(', ');

            selected_update_array.forEach(function(room) {
                var checkbox = document.getElementById(room.trim());
                if (checkbox) {
                    checkbox.checked = true;
                }
            });
        }
    });
</script>
@endpush

