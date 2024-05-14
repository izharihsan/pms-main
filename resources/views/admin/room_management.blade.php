@extends('layouts.admin')
@section('title', 'Room Management')
@section('content')

<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Room Management</h6>
        <h6 class="mb-0">Bali Bird Resort</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Name</th>
                        <th>Max Occupancy</th>
                        <th>Room Size</th>
                        <th>Number Of Room</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Deluxe Sweet</td>
                        <td>2 People</td>
                        <td>20 m</td>
                        <td>15 rooms</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="/admin/general_information" type="button" class="btn btn-primary p-1">
                                <i class="ph-eye m1"></i>
                            </a>
                            <button type="button" class="btn btn-danger p-1">
                                <i class="ph-backspace m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Executive Suite</td>
                        <td>5 People</td>
                        <td>30 m</td>
                        <td>10 rooms</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="/admin/general_information" type="button" class="btn btn-primary p-1">
                                <i class="ph-eye m1"></i>
                            </a>
                            <button type="button" class="btn btn-danger p-1">
                                <i class="ph-backspace m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Doubled Bed</td>
                        <td>4 People</td>
                        <td>25 m</td>
                        <td>5 rooms</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="/admin/general_information" type="button" class="btn btn-primary p-1">
                                <i class="ph-eye m1"></i>
                            </a>
                            <button type="button" class="btn btn-danger p-1">
                                <i class="ph-backspace m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Standard</td>
                        <td>2 People</td>
                        <td>12 m</td>
                        <td>20 rooms</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="/admin/general_information" type="button" class="btn btn-primary p-1">
                                <i class="ph-eye m1"></i>
                            </a>
                            <button type="button" class="btn btn-danger p-1">
                                <i class="ph-backspace m1"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

 
</div>

@endsection