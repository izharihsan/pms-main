@extends('layouts.admin')

@section('title', 'Create Property')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <h3 class="mb-0">Add New Property - Type</h3>
            <small>Choose the appropriate type to describe your property</small>
        </div>
        

        <form method="GET" action="{{ route('admin.property.create') }}">
            <div class="row">
                @foreach ($category_facilities['data'] as $item)
                    <div class="col-sm-6 col-xl-6">
                        <div class="input-group align-items-center">
                            <input type="radio" id="{{ $item['id'] }}" name="property_type" value="{{ $item['name'] }}" style="margin-right: 20px;transform: scale(1.5);" required>
                            {{-- card --}}
                            <div class="card" for="{{ $item['id'] }}" style="border-radius: 10px;width: 95%; background-color: #E6EFFC;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 text-center">
                                            <img src="{{ asset('img/image-not-found.png') }}" alt="" width="50"
                                                style="border-radius: 50%; margin-right: 10px;">
                                        </div>
                                        <div class="col-md-8">
                                            <label>{{ $item['name'] }}</label>
                                            <div>{{ $item['description'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-sm-12 col-xl-12 mt-5">
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <button class="btn btn-secondary btn-outline" style="float: left;" type="button"><i class="ph-x pr-2"></i> Cancel</button>
                        </div>
                        <div class="col-md-6">
                            {{-- STEP 1 --}}
                            <input type="hidden" name="category" value="{{ \Request::get('category') }}">
                            <input type="hidden" name="step" value="3">
                            <button class="btn btn-primary" style="float: right;" type="submit">Continue <i class="ph-arrow-right pl-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection