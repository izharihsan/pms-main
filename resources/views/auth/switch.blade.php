@extends('layouts.auth')

@section('title', 'Pilih Property')

@section('content')
<div class="row">
    {{-- BUTTON RIGHT --}}
    <div class="col-xl-12 text-end">
        <a href="{{ route('admin.property.create') }}" class="btn btn-light">Create New Property <i class="ph-plus ms-2"></i></a>
    </div>

    @foreach ($properties as $item)
        <div class="col-lg-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h3 class="mb-0">{{ $item->name }}</h3>
                        <div class="ms-auto">
                            <a href="javascript:void" onclick="deleteProperty({{$item->id}})" class="text-white" data-card-action="reload">
                                <i class="ph-trash"></i>
                            </a>
                        </div>
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
                        <form action='{{ route('switchProperty') }}' method='POST' enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="property_id">
                        <button type='submit' class='btn btn-success'>Manage Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
@endsection