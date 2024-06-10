@extends('layouts.admin')
@section('title', 'Manage User')
@section('content')
@section('manage_user', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Manage User</h5>
                <span class="mb-0">Manage User Management</span>
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="dropdown"><i class="ph-funnel"></i> Filter</button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form action="{{ route('admin.manage-user.index') }}" method="GET">
                            <div class="row">
                                <div class="col">
                                    <label for="" class="fw-bold dropdown-item">Keyword</label>
                                    <div class="form-group" style="width: 80%; margin: 0 auto;">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search" value="{{ request('keyword') }}">
                                    </div>
                                    <div class="float-end mt-4" style="margin-right: 5%;">
                                        <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('admin.manage-user.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-plus"></i> Add Manage User</a>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img width="100px" src="{{ asset($item->avatar) }}" alt="">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td>{{ $item->company_name }}</td>
                            <td>
                                <span class="badge bg-{{ $item->status == 'aktif' ? 'success' : 'danger' }}">{{ $item->status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.manage-user.show', $item->id) }}" type="button" class="btn btn-primary btn-sm p-1">
                                    <i class="ph-eye m1"></i>
                                </a>
                                <a href="{{ route('admin.manage-user.edit', $item->id) }}" type="button" class="btn btn-warning btn-sm p-1">
                                    <i class="ph-pencil m1"></i>
                                </a>
                                <a href="" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin?', 'Konfirmasi Penghapusan')){ $('form#hapus{{ $loop->iteration }}').submit(); }" type="button" class="btn btn-danger btn-sm p-1">
                                    <i class="ph-trash m1"></i>
                                </a>

                                <form id="hapus{{ $loop->iteration }}" action="{{ route('admin.manage-user.destroy', $item->id) }}" method="POST">
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