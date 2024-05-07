@extends('layouts.admin')
@section('title', 'Room Management')
@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">Property Management - General Information</h6>
    </div>

    <div class="card-body">
        <div class="list-group list-group-borderless py-2">
            <div class="list-group-item d-flex">
                <a href="#" class="d-block me-3">
                    <img src="../../../assets/images/demo/users/face1.jpg" class="rounded-circle" width="40" height="40" alt="">
                </a>

                <div class="flex-fill">
                    <div class="fw-semibold">Bali Bird Resort</div>
                    <i class="ph-buildings m1"></i><h8>Deluxe Room & Superior Room</h8> <br>
                    <div style="margin-top: 2%;">
                        <i class="ph-megaphone m1"></i> 50 Rooms <i class="ph-users m1" style="margin-left: 2%;"></i> 2 People (Max Occupancy) <i class="ph-cube m1" style="margin-left: 2%;"></i> 20 M (Room Size)
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection