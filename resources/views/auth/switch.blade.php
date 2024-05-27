@extends('layouts.auth')

@section('title', 'Pilih Property')

@section('content')

<!-- Login form -->
<form class="login-form" action="{{ route('switchProperty') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card mb-0">
        <div class="card-body">
            
            {{-- CARD TO SELECT PROPERTY --}}
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="d-inline-flex bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-3 mb-3 mt-1">
                            <i class="ph-arrows-counter-clockwise ph-2x"></i>
                        </div>
                        <h5 class="mb-0">Pilih Property</h5>
                        <span class="d-block text-muted">Pilih salah satu property</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Property</label>
                        <div class="form-control-feedback form-control-feedback-start">
                            <select class="form-select" name="property_id">
                                <option value="" selected disabled></option>
                                @foreach ($properties as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <div class="form-control-feedback-icon">
                                <i class="ph-arrows-counter-clockwise text-muted"></i>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="ph-arrow-counter-clockwise me-2"></i>
                        Submit
                    </button>
                </div>
            </div>

        </div>
    </div>
</form>
<!-- /login form -->
@endsection