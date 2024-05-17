@extends('layouts.admin')
@section('title', 'Dashboard')
@section('room_rates', 'active')

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
                <span class="breadcrumb-item active">Room Rate</span>
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
            <div class="d-flex align-items-end flex-nowrap">
                <a href="{{ route('admin.room-rates.create') }}" type="button" class="btn btn-primary ms-auto mb-4">Bulk Add/Update</a>
            </div>
            <div class="card">
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
                                    <td></td>
                                @endforeach
                            </tr>
                            <!-- Hidden row -->
                            <div class="hidden-row" style="display: none;">
                                @foreach ($rate_plan as $item_rate)
                                    <tr id="collapsible-card-indicator-left1">
                                        <td>{{ $item_rate->name }}</td>

                                        @foreach ($datesInCurrentMonth as $date)
                                            @php 
                                            // dd($date->toDateString());
                                                $room_rates = App\Models\RoomRates::where('start_date', '<=', $date->toDateString())
                                                            ->where('end_date', '>=', $date->toDateString())
                                                            ->first();
                                                            
                                                if ($room_rates) {
                                                    $room_r_d = App\Models\RoomRatesDetails::where([
                                                        'room_rates_id' => $room_rates->id,
                                                        'rate_plan_id'  => $item_rate->id,
                                                        'room_id'       => $item->id
                                                    ])->first();
                                                }
                                            @endphp

                                            <td>
                                                @if (isset($room_r_d) && isset($room_rates))
                                                    {{ number_format($room_r_d->minimum_rate, 2) }}
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
        </div>
        <!-- /content area -->

    </div>
    <!-- /inner content -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->
@endsection
@push('script')

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