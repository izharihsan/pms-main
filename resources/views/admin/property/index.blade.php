@extends('layouts.admin')

@section('title', 'Property')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Property</h6>
    </div>

    <div class="card-body">
        <h6>Property List</h6>
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Property Name</th>
                    <th>Legal Name</th>
                    <th>Phone Number</th>
                    <th>Total Room</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->legal_name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->total_room }}</td>
                        <td>
                            <a href="{{ route('admin.property.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.property.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection