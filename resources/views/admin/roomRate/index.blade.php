@extends('layouts.admin')
@section('title', 'Room Rates')
@section('room_rates', 'active')

@push('css')
    <style>
        .highlight-current-date {
            border-left: 2px solid red;
        }
    </style>
@endpush

@section('breadcrumb')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Room Rate</span>
            </h4>

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
                <span class="breadcrumb-item active">Room Rate</span>
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
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <div class="float-end mt-4">
                            <button class="btn btn-outline-primary btn-sm"><i class="ph-funnel"></i> Filter</button>
                            <a href="#" class="btn btn-primary ms-1 btn-sm"><i class="ph-arrow-line-up"></i> Push</a>
                            {{-- <a href="{{ route('admin.room-rates.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-plus"></i> Bulk Add / Update</a> --}}
                            <a href="#" class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default"><i class="ph-plus"></i> Bulk Add / Update</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Basic modal -->
            <div id="modal_default" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Select Property</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.room-rates.create') }}" method="GET">
                        
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="" class="fw-bold">Property Name<strong class="text-danger">*</strong></label>
                                        <select name="property_id" id="" class="form-control" required>
                                            <option value="">Select Property</option>
                                            @foreach ($property as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->

            <div class="card-body">
                <table class="table datatable-fixed-left">
                    <thead>
                        <tr>
                            <th>Room</th>
                            @foreach ($datesInCurrentMonth as $date)
                                <th style="align-items: center;">{{ $date->format('d D') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    @foreach ($rooms as $item)
                        @php 
                            $rate_plan = App\Models\RatePlan::where('connected_rooms', 'LIKE', '%'. $item->room_name .'%')->get();
                        @endphp
                        <tbody>
                            <tr>
                                <td class="toggle-details">
                                    <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left1">
                                        <i class="ph-caret-down collapsible-indicator me-2"></i>
                                        {{ $item->room_name }}
                                    </a>
                                </td>
                                @foreach ($datesInCurrentMonth as $date)
                                    <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}" style="align-items: center;"></td>
                                @endforeach
                            </tr>
                            <!-- Hidden row -->
                            <div class="hidden-row" style="display: none;">
                                @foreach ($rate_plan as $item_rate)
                                    <tr id="collapsible-card-indicator-left1">
                                        <td>{{ $item_rate->name }}</td>

                                        @foreach ($datesInCurrentMonth as $date)
                                            @php 
                                                $room_rates = App\Models\RoomRates::where('start_date', '<=', $date->toDateString())
                                                            ->where('end_date', '>=', $date->toDateString())
                                                            ->latest()
                                                            ->first();
                                                            
                                                if ($room_rates) {
                                                    $room_r_d = App\Models\RoomRatesDetails::where([
                                                        'room_rates_id' => $room_rates->id,
                                                        'rate_plan_id'  => $item_rate->id,
                                                        'room_id'       => $item->id
                                                    ])->latest()
                                                    ->first();

                                                    // dd($room_r_d);
                                                }
                                            @endphp

                                            <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}" style="align-items: center;">
                                                @if (isset($room_r_d) && isset($room_rates))
                                                    <a href="{{ route('admin.room-rates.edit', $room_rates->id) }}">
                                                        @if($room_r_d->stop_sell == true)
                                                            <i class="ph-x collapsible-indicator me-2" style="color: red;"></i>
                                                        @else 
                                                            {{ number_format($room_r_d->minimum_rate, 2) }}
                                                        @endif
                                                       
                                                    </a>
                                                @else 
                                                    -
                                                @endif
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            
                            </div>
                        </tbody>
                    @endforeach
                
                </table>
            </div>
            
            {{-- <table class="table datatable-fixed-left">
                <thead class="table-light">
                    <tr>
                        <th scope="col-3">Room</th>

                        @foreach ($datesInCurrentMonth as $date)
                            <th scope="col">{{ $date->format('d D') }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-dark fs-5">⊝<span class="px-2 fs-6"> Deluxe Sweet</span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Room Only</th>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-dark fs-5">⊝<span class="px-2 fs-6"> Executive Suite</span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th scope="row" class="px-5">Room Only</th>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                        <td>300.000</td>
                    </tr>
                </tbody>
            </table> --}}
        </div>
        <!-- /content area -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#DataTables_Table_0_filter').hide();
            $('#DataTables_Table_0_length').hide();
        });
    </script>

    <script>
        function edit(id) {
            $.ajax({
                url: '/employee/' + id + '/edit',
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
    </script>
@endpush