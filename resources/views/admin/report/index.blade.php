@extends('layouts.admin')
@section('title', 'Report')
@section('content')
@section('report', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Room Availabilities</h5>
                <h6 class="mb-0">Bali Bird Resort</h6>
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    <button class="btn btn-outline-primary btn-sm"><i class="ph-funnel"></i> Filter</button>
                    <button class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default">Export</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Basic modal -->
	<div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Filter Options</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="" class="fw-bold">Start<strong class="text-danger">*</strong></label>
                                <input type="date" class="form-control" required placeholder="E.g Room Only">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="fw-bold">Update<strong class="text-danger">*</strong></label>
                                <input type="date" class="form-control" required placeholder="Rate plan description">
                            </div>
                        </div>
                    </form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /basic modal -->

    <div class="card-body">
        <table class="table datatable-fixed-left">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                    <th>Connected Room</th>
                    <th>PC (IP)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Septa</td>
                    <td>Wednesday, 3-1-2024</td>
                    <td>Update Rate Plan Room and Dinner</td>
                    <td>Standard</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Septa</td>
                    <td>Wednesday, 3-1-2024</td>
                    <td>Add new Rate Plan Room</td>
                    <td>Deluxe Sweet, Executive Suite, Doubled Bed and Standard</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Dwi</td>
                    <td>Wednesday, 3-1-2024</td>
                    <td>Update Rate Plan Room only stop sell</td>
                    <td>Deluxe Sweet</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Harris</td>
                    <td>Wednesday, 3-1-2024</td>
                    <td>Update Room Availability</td>
                    <td>Executive Suite</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

 
</div>

@endsection

@push('js')
    <script>
    
    </script>
@endpush