@extends('layouts.admin')

@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Popins&display=swap">

{{-- IMPORT CDN FONTAWESOME --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<style>
    .bg-theme {
        background-color: #013FA1;
    }

    .color-theme {
        color: #013FA1;
    }

    .btn-primary {
        background-color: #013FA1;
        font-family: 'Poppins';
    }

    .text-primary {
        color: #013FA1 !important;
        font-weight: 600;
        font-family: 'Poppins';
    }

    .border {
        border: 1px solid #013FA1;
        border-radius: 10px;
        height: 241px;
    }

    .add-item-card {
        margin-left: 55px;
        font-size: 24px;
        font-family: 'Poppins';
        font-weight: 900;
    }
</style>
@endpush

@section('breadcrumb')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Dashboard</span>
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
                    <span class="breadcrumb-item active">Dashboard</span>
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
<!-- Quick stats boxes -->
{{-- BUTTON ADD PEROPERTY --}}
<div class="row mb-3">
    {{-- BUTTON RIGHT --}}
    <div class="col-md-12 text-end">
        <a href="{{ route('admin.property.create') }}" class="btn btn-light">Create New Property <i class="ph-plus ms-2"></i></a>
    </div>
</div>
<div class="row">
    @foreach ($property as $item)
        <div class="col-lg-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0">{{ $item->name }}</h3>
                        {{-- <div class="ms-auto">
                            <a class="text-white" data-card-action="reload">
                                <i class="ph-arrows-clockwise"></i>
                            </a>
                        </div> --}}
                    </div>

                    {{-- ICON RATING --}}
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-star {{ ($item->rate < 1) ? 'text-secondary' : 'text-warning' }} me-1"></i>
                        <i class="fa-solid fa-star {{ ($item->rate < 2) ? 'text-secondary' : 'text-warning' }} me-1"></i>
                        <i class="fa-solid fa-star {{ ($item->rate < 3) ? 'text-secondary' : 'text-warning' }} me-1"></i>
                        <i class="fa-solid fa-star {{ ($item->rate < 4) ? 'text-secondary' : 'text-warning' }} me-1"></i>
                        <i class="fa-solid fa-star {{ ($item->rate < 5) ? 'text-secondary' : 'text-warning' }} me-1"></i>
                    </div>

                    {{-- Homestay --}}
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-building text-white me-1"></i>
                        <span class="text-white">{{ ucfirst($item->category) }}</span>
                    </div>
                    {{-- LOCATION --}}
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-location-dot text-white me-1"></i>
                        <span class="text-white">{{ ucfirst($item->address->address ?? '') }}</span>
                    </div>
                    {{-- BUTTON Manage Property --}}
                    <div class="d-flex align-items-center">
                        <a href="{{ route('admin.property.manageProperty', [$item->id]) }}" class="btn btn-primary btn-block mt-3">
                            Manage Property
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- /quick stats boxes -->

<div class="row">
    <div class="col-xl-12">

        <!-- Marketing campaigns -->
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="mb-0">Last Activity</h5>
            </div>

            <div class="table-responsive">
                <table class="table datatable-fixed-left">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>User</th>
                            <th>Date & Time</th>
                            <th>Action</th>
                            <th>Connected Room</th>
                            <th>PC (IP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($log as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->user->name ?? null }}</td>
                                <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                                <td>{{ $item->action }}</td>
                                <td>{{ $item->connected_room }}</td>
                                <td>{{ $item->ip_address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /marketing campaigns -->


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="mb-0">Statistic</h5>
                    </div>
        
                    <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div id="campaigns-donut"><svg width="170" height="44"><g transform="translate(22,22)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.2246467991473533e-15,20A20,20 0 0,1 -14.789625517336402,13.46354251513887L-7.394812758668201,6.731771257569435A10,10 0 0,0 6.123233995736766e-16,10Z" style="fill: rgb(102, 187, 106);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-14.789625517336402,13.46354251513887A20,20 0 0,1 0.6835130502519166,-19.988316835344975L0.3417565251259583,-9.994158417672487A10,10 0 0,0 -7.394812758668201,6.731771257569435Z" style="fill: rgb(149, 117, 205);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M0.6835130502519166,-19.988316835344975A20,20 0 0,1 6.123233995736766e-15,20L3.061616997868383e-15,10A10,10 0 0,0 0.3417565251259583,-9.994158417672487Z" style="fill: rgb(255, 112, 67);"></path></g></g></svg></div>
                            <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">38,289</h5>
                                    <span class="text-success ms-2">
                                        <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                        (+16.2%)
                                    </span>
                                </div>
                                <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                                <span class="text-muted">May 12, 12:30 am</span>
                            </div>
                        </div>
        
                        <div class="d-flex align-items-center mb-3 mb-sm-0">
                            <div id="campaign-status-pie"><svg width="44" height="44"><g transform="translate(22,22)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.2246467991473533e-15,20A20,20 0 0,1 -10.563961394570233,-16.98242384508259L-5.281980697285117,-8.491211922541295A10,10 0 0,0 6.123233995736766e-16,10Z" style="fill: rgb(41, 182, 246);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-10.563961394570233,-16.98242384508259A20,20 0 0,1 18.265316209260767,-8.147283214404409L9.132658104630384,-4.073641607202204A10,10 0 0,0 -5.281980697285117,-8.491211922541295Z" style="fill: rgb(239, 83, 80);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M18.265316209260767,-8.147283214404409A20,20 0 0,1 15.306158799579311,12.873286402549306L7.653079399789656,6.436643201274653A10,10 0 0,0 9.132658104630384,-4.073641607202204Z" style="fill: rgb(129, 199, 132);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M15.306158799579311,12.873286402549306A20,20 0 0,1 6.123233995736766e-15,20L3.061616997868383e-15,10A10,10 0 0,0 7.653079399789656,6.436643201274653Z" style="fill: rgb(153, 153, 153);"></path></g></g></svg></div>
                            <div class="ms-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">2,458</h5>
                                    <span class="text-danger ms-2">
                                        <i class="ph-arrow-down fs-base lh-base align-top"></i>
                                        (-4.9%)
                                    </span>
                                </div>
                                <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                <span class="text-muted">Jun 4, 4:00 am</span>
                            </div>
                        </div>
        
                        <div>
                            <a href="#" class="btn btn-indigo">
                                <i class="ph-file-pdf me-2"></i>
                                View report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- MODALS --}}
<div id="modal_remote" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remote source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae quaerat, voluptates nulla porro reiciendis, architecto officiis dolor laborum rem, soluta quisquam quibusdam consequatur totam cupiditate. Voluptatum, itaque! Repellat, magnam deleniti?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection