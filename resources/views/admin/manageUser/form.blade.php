@extends('layouts.admin')
@section('title', 'Create User')
@section('content')

@section('manage_user', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">User</h5>
                <span class="mb-0">User Management</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h6>Add New User</h6>
        <form id="myForm"  action="{{ route('admin.manage-user.store') }}" method="POST">
            @csrf
            <div class="row">
                <input type="hidden" id="rate_plan_id" name="rate_plan_id" @isset($data) value="{{ $data->id }}" @endisset>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Name<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Input Name" name="name" @isset($data) value="{{ $data->name }}" @endisset>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Email<strong class="text-danger">*</strong></label>
                        <input type="email" class="form-control" required placeholder="Input Email" name="email" @isset($data) value="{{ $data->email }}" @endisset>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Phone<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Input Phone" name="phone" @isset($data) value="{{ $data->phone }}" @endisset>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Status<strong class="text-danger">*</strong></label>
                        <select name="status" id="" class="form-select">
                            <option @isset($data) @if($data->status == "Active") selected @endif @endisset value="Active">Active</option>
                            <option @isset($data) @if($data->status == "Inactive") selected @endif @endisset value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Company Name<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Input Company Name" name="company_name" @isset($data) value="{{ $data->company_name }}" @endisset>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="" class="fw-bold">Avatar<strong class="text-danger">*</strong></label>
                        <input type="file" class="form-control" required placeholder="Input Image" name="avatar" @isset($data) value="{{ $data->avatar }}" @endisset>
                    </div>
                </div>
            </div>
            <div class="float-end mt-4">
                <a href="{{ route('admin.manage-user.index') }}" class="btn btn-sm btn-outline-primary">Cancel</a>
                <button id="submitBtn" type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </form>
    </div> 
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#submitBtn').click(function() {
            event.preventDefault();
            var rate_plan_id = $('#rate_plan_id').val();

            if (rate_plan_id !== '') {
                Swal.fire({
                    title: 'Are You Sure ?',
                    text: 'Are you sure you want to update this rate plan? This action cannot be undone',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonCol-md-6or: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Update It!'
                }).then((result) => {
                    // If user confirms, submit the form
                    if (result.isConfirmed) {
                        $('#myForm').submit();
                    }
                });
            }else{
                $('#myForm').submit();
            }
           
        });
    });
</script>
@endpush

