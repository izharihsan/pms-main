@extends('layouts.admin')
@section('title', 'Room Availability')
@section('content')
@section('room_availability', 'active')

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
                    <a href="{{ route('admin.rate_plan.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-arrow-line-up"></i> Push</a>
                    <button class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default"><i class="ph-plus"></i> Bulk Add / Update</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Basic modal -->
	<div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Bulk Add / Update</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="fw-bold">Start Date<strong class="text-danger">*</strong></label>
                                <input type="date" class="form-control" required placeholder="E.g Room Only">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold">End Date<strong class="text-danger">*</strong></label>
                                <input type="date" class="form-control" required placeholder="Rate plan description">
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Connected Room</label><br>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Deluxe Sweet</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Executive Sweet</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Double Bad</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Standard</label>
                
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Choose To Update</label><br>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Availability</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">CTA</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">CTD</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Stop Sell</label>
                                <input type="checkbox" id="breakfast" name="connected_room">
                                <label for="breakfast">Stop Sell Limit</label>
                            </div>
                            <div class="form-group" style="margin-top: 5%;">
                                <label for="" class="fw-bold">Availability<strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" required placeholder="E.g 40">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">CTA</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">CTD</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>

                                
                                <div class="form-group col-md-4" style="margin-top: 5%;">
                                    <label for="" class="fw-bold">Stop Sell</label>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input" id="sc_ls_c" checked>
                                        <label class="form-check-label" for="sc_ls_c"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 5%;">
                                <label for="" class="fw-bold">Stop Sell Limit<strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" required placeholder="E.g 40">
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
                    <th>Room</th>
                    <th>24 Wed</th>
                    <th>25 Thu</th>
                    <th>26 Fri</th>
                    <th>27 Sat</th>
                    <th>28 Mon</th>
                    <th>29 Tue</th>
                    <th>30 Wed</th>
                    <th>31 Thu</th>
                    <th>1 Fri</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="toggle-details">
                        <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left1">
                            <i class="ph-caret-down collapsible-indicator me-2"></i>
                            Deluxe Sweet
                        </a>
                    </td> <!-- Toggle button column -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Hidden row -->
                <div class="hidden-row" style="display: none;">
                    <tr id="collapsible-card-indicator-left1">
                        <td>Availability</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>

                    <tr id="collapsible-card-indicator-left1">
                        <td>CTA</td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                    </tr>
                    
                    <tr id="collapsible-card-indicator-left1">
                        <td>CTD</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left1">
                        <td>Stop Sell</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left1">
                        <td>Stop Sell Limit</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </div>
            </tbody>

            <tbody>
                <tr>
                    <td class="toggle-details">
                        <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left2">
                            <i class="ph-caret-down collapsible-indicator me-2"></i>
                            Executive Sweet
                        </a>
                    </td> <!-- Toggle button column -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Hidden row -->
                <div class="hidden-row" style="display: none;">
                    <tr id="collapsible-card-indicator-left2">
                        <td>Availability</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>CTA</td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                    </tr>
                    
                    <tr id="collapsible-card-indicator-left2">
                        <td>CTD</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell Limit</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </div>
            </tbody>

            <tbody>
                <tr>
                    <td class="toggle-details">
                        <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left2">
                            <i class="ph-caret-down collapsible-indicator me-2"></i>
                            Double Bed
                        </a>
                    </td> <!-- Toggle button column -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Hidden row -->
                <div class="hidden-row" style="display: none;">
                    <tr id="collapsible-card-indicator-left2">
                        <td>Availability</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>CTA</td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                    </tr>
                    
                    <tr id="collapsible-card-indicator-left2">
                        <td>CTD</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell Limit</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </div>
            </tbody>

            <tbody>
                <tr>
                    <td class="toggle-details">
                        <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left2">
                            <i class="ph-caret-down collapsible-indicator me-2"></i>
                            Standard
                        </a>
                    </td> <!-- Toggle button column -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <!-- Hidden row -->
                <div class="hidden-row" style="display: none;">
                    <tr id="collapsible-card-indicator-left2">
                        <td>Availability</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>CTA</td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                        <td><i class="ph-check collapsible-indicator me-2"></i></td>
                    </tr>
                    
                    <tr id="collapsible-card-indicator-left2">
                        <td>CTD</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell</td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                        <td><i class="ph-x collapsible-indicator me-2"></i></td>
                    </tr>

                    <tr id="collapsible-card-indicator-left2">
                        <td>Stop Sell Limit</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </div>
            </tbody>
        </table>
    </div>

 
</div>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#DataTables_Table_0_filter').hide();
            $('#DataTables_Table_0_length').hide();
        });
    </script>
@endpush