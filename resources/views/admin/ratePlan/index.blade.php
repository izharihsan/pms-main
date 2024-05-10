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
                    <tr>
                        <td>1</td>
                        <td>Room Only</td>
                        <td>
                            Deluxe Sweet, Executive Suite,
                            Double Bed and Standart
                        </td>
                        <td>No Meals</td>
                        <td>Non Refundable</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm p-1">
                                <i class="ph-eye m1"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm p-1">
                                <i class="ph-pencil m1"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm p-1">
                                <i class="ph-trash m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Room And Dinner</td>
                        <td>Standard</td>
                        <td>No Meals</td>
                        <td>Cancel 10D prior arrival 50% charge. No Show 100% Charge.</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm p-1">
                                <i class="ph-eye m1"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm p-1">
                                <i class="ph-pencil m1"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm p-1">
                                <i class="ph-trash m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Test Rates Plans</td>
                        <td>Standard</td>
                        <td>No Meals</td>
                        <td>Cancel 10D prior arrival 50% charge. No Show 100% Charge.</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm p-1">
                                <i class="ph-eye m1"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm p-1">
                                <i class="ph-pencil m1"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm p-1">
                                <i class="ph-trash m1"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>bagus</td>
                        <td>Standard</td>
                        <td>No Meals</td>
                        <td>Cancel 10D prior arrival 50% charge. No Show 100% Charge.</td>
                        <td>
                            <button type="button" class="btn btn-primary p-1 btn-sm">
                                <i class="ph-eye m1"></i>
                            </button>
                            <button type="button" class="btn btn-warning p-1 btn-sm">
                                <i class="ph-pencil m1"></i>
                            </button>
                            <button type="button" class="btn btn-danger p-1 btn-sm">
                                <i class="ph-trash m1"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

 
</div>

@endsection