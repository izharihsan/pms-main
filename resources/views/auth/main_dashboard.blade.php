@extends('layouts.auth')

@section('title', 'Pilih Property')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($properties as $item)
            <div class="col-lg-4">
                <div class="card bg-primary text-white" style="height: 210px;">
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
                        {{-- <div class="d-flex align-items-center">
                            <form action='{{ route('switch') }}' method='POST' enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="property_id">
                            <button type='submit' class='btn btn-success'>Edit Property</button>
                            </form>
                        </div> --}}
                        <a href="{{ route('switch') }}" class='btn btn-success'>Edit Property</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-lg-4">
            <a href="{{ route('admin.property.create') }}">
                <div class="card text-white" style="height: 210px;">
                    <div class="card-body text-center" style="border: 1px solid #013FA1;border-radius: 5px;color: #013FA1;">
                        <h3 class="mb-0" style="margin: 70px auto;"><i class="ph-plus ms-2"></i> Add New Property</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection