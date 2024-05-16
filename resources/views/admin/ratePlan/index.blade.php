@extends('layouts.admin')
@section('title', 'Room Management')
@section('content')
@section('rate_plan', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Rate Plan</h5>
                <h6 class="mb-0">Bali Bird Resort</h6>
                <span class="mb-0">Rate Plan Management</span>
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    <button class="btn btn-outline-primary btn-sm"><i class="ph-funnel"></i> Filter</button>
                    <a href="{{ route('admin.rate_plan.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-plus"></i> Add Rate Plan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rate Plan Name</th>
                        <th>Connected Room</th>
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
                            <td>@if($item->meels !== null) Meeals @else No Meals @endif</td>
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