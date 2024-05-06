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

@section('content')
{{-- HEADER --}}
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-auto">
            <h2 class="page-title color-theme">
                Dashboard
            </h2>
        </div>
    </div>
</div>


<div class="row">
    @for ($i = 0; $i < 2; $i++) <div class="col-md-4">
        <div class="d-flex align-items-center border p-3">
            <div>
                <h2 class="mb-0 color-theme">Bali Bird Spa</h2>
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
                    <i class="fa-solid fa-building text-primary me-1"></i>
                    <span class="text-primary">Homestay</span>
                </div>
                {{-- LOCATION --}}
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-location-dot text-primary me-1"></i>
                    <span class="text-primary">Jl. Gatot Subroto Barat No. 282</span>
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
@endfor
<div class="col-md-4">
    <div class="d-flex align-items-center border p-3">
        <div>
            <a href="" class="add-item-card color-theme">
                {{-- Add New Property POSTIOTIN ON CENTER--}}
                <i class="fa-solid fa-plus text-primary"></i> Add New Property
            </a>
        </div>
    </div>
</div>
</div>


{{-- LAST ACTIVITY --}}
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-auto">
            <h2 class="page-title color-theme">
                Last Activity
            </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="table-responsive">
        <table class="table color-theme text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Property</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 20; $i++) <tr>
                    <td>{{ $i + 1 }}.</td>
                    <td>Properti {{ $i + 1 }}</td>
                    <td>Add New Room,Type Deluxe</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>

{{-- Statistic --}}
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-auto">
            <h2 class="page-title color-theme">
                Statistic
            </h2>
        </div>
    </div>
</div>

<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
    <div class="d-flex align-items-center mb-3 mb-sm-0 border">
        <div id="campaigns-donut"><svg width="177" height="177"><g transform="translate(22,22)"><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M1.2246467991473533e-15,20A20,20 0 0,1 -14.789625517336402,13.46354251513887L-7.394812758668201,6.731771257569435A10,10 0 0,0 6.123233995736766e-16,10Z" style="fill: rgb(102, 187, 106);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M-14.789625517336402,13.46354251513887A20,20 0 0,1 0.6835130502519166,-19.988316835344975L0.3417565251259583,-9.994158417672487A10,10 0 0,0 -7.394812758668201,6.731771257569435Z" style="fill: rgb(149, 117, 205);"></path></g><g class="d3-arc d3-slice-border" style="cursor: pointer;"><path d="M0.6835130502519166,-19.988316835344975A20,20 0 0,1 6.123233995736766e-15,20L3.061616997868383e-15,10A10,10 0 0,0 0.3417565251259583,-9.994158417672487Z" style="fill: rgb(255, 112, 67);"></path></g></g></svg></div>
    </div>
</div>
@endsection