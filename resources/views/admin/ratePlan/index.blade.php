@extends('layouts.admin')
@section('title', 'Rate Plan')
@section('content')
@section('rate_plan', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Rate Plan</h5>
                <h6 class="mb-0">{{ $property->name }}</h6>
                <span class="mb-0">Rate Plan Management</span>
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="dropdown"><i class="ph-funnel"></i> Filter</button>
                    <div class="dropdown-menu dropdown-menu-end">
                        {{-- <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a href="#" class="dropdown-item">One more line</a> --}}
                        <form action="{{ route('admin.rate_plan.index') }}" method="GET">
                            <div class="row">
                                <div class="col">
                                    <label for="" class="dropdown-item">Filter Options</label>
                                    <label for="" class="fw-bold dropdown-item">Meals Plan</label>
                                    <div class="form-group" style="width: 80%; margin: 0 auto;">
                                        <select name="meals" id="" class="form-control" required>
                                            <option value="">-- Select --</option>
                                            <option value="all">All</option>
                                            <option value="no_meals">No Meals</option>
                                            <option value="breakfast">Breakfast</option>
                                            <option value="lunch">Lunch</option>
                                            <option value="dinner">Dinner</option>
                                        </select>
                                    </div>
                                    <label for="" class="fw-bold dropdown-item">Rooms</label>
                                    <div class="form-group" style="width: 80%; margin: 0 auto;">
                                        <select name="room" id="" class="form-control" required>
                                            <option value="">-- Select --</option>
                                            <option value="all">All</option>
                                            @foreach ($rooms as $item)
                                                <option value="{{ $item->room_name }}">{{ $item->room_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="float-end mt-4" style="margin-right: 5%;">
                                        <a href="{{ route('admin.rate_plan.index') }}" class="btn btn-sm btn-outline-primary">Reset</a>
                                        <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            
                    <a href="{{ route('admin.rate_plan.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-plus"></i> Add Rate Plan</a>
                    {{-- <a href="#" class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default"><i class="ph-plus"></i> Add Rate Plan</a> --}}
                </div>
            </div>
        </div>
    </div>

     <!-- Basic modal -->
	{{-- <div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Select Property</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

                <form action="{{ route('admin.rate_plan.create') }}" method="GET">
                   
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
	</div> --}}
	<!-- /basic modal -->

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rate Plan Name</th>
                        <th>Connected Room</th>
                        <th>Property</th>
                        <th>Meals Plan</th>
                        <th>Cancelation Policy</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                {{ $item->description }}
                            </td>
                            <td>{{ $item->property ? $item->property->name : '-' }}</td>
                            <td>@if($item->meals !== null) Meals @else No Meals @endif</td>
                            <td>{{ $item->cancelation_policy }}</td>
                            <td>
                                <a href="{{ route('admin.rate_plan.show', $item->id) }}" type="button" class="btn btn-primary btn-sm p-1">
                                    <i class="ph-eye m1"></i>
                                </a>
                                <a href="{{ route('admin.rate_plan.edit', $item->id) }}" type="button" class="btn btn-warning btn-sm p-1">
                                    <i class="ph-pencil m1"></i>
                                </a>
                                <a href="" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin?', 'Konfirmasi Penghapusan')){ $('form#hapus{{ $loop->iteration }}').submit(); }" type="button" class="btn btn-danger btn-sm p-1">
                                    <i class="ph-trash m1"></i>
                                </a>

                                <form id="hapus{{ $loop->iteration }}" action="{{ route('admin.rate_plan.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

 
</div>

@endsection