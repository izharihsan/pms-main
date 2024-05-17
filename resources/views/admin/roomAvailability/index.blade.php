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

                <form action="{{ route('admin.room_availability.store') }}" method="post">
                    @csrf
				    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="fw-bold">Start Date<strong class="text-danger">*</strong></label>
                                <input type="date" name="start_date" class="form-control" required placeholder="E.g Room Only">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold">End Date<strong class="text-danger">*</strong></label>
                                <input type="date" name="end_date" class="form-control" required placeholder="Rate plan description">
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Connected Room</label><br>
                                @foreach ($room as $item)
                                    <input type="checkbox" id="{{ $item->room_name }}" name="connected_rooms[{{ $item->room_name }}]">
                                    <label for="breakfast">{{ $item->room_name }}</label>
                                @endforeach
                
                            </div>
                            <div class="form-group">
                                <hr>
                                <label for="" class="fw-bold">Choose To Update</label><br>
                                <input type="checkbox" id="availability" name="update_data[availability]">
                                <label for="breakfast">Availability</label>
                                <input type="checkbox" id="cta" name="update_data[cta]">
                                <label for="breakfast">CTA</label>
                                <input type="checkbox" id="ctd" name="update_data[ctd]">
                                <label for="breakfast">CTD</label>
                                <input type="checkbox" id="stop_sell" name="update_data[stop_sell]">
                                <label for="breakfast">Stop Sell</label>
                                <input type="checkbox" id="stop_sell_limit" name="update_data[stop_sell_limit]">
                                <label for="breakfast">Stop Sell Limit</label>
                            </div>
                            <div class="form-group" style="margin-top: 5%;">
                                <label for="" class="fw-bold">Availability<strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" required placeholder="E.g 40" name="availability">
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
                                <input type="text" class="form-control" required placeholder="E.g 40" name="stop_sell_limit">
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
	</div>
	<!-- /basic modal -->

    <div class="card-body">
        <table class="table datatable-fixed-left">
            <thead>
                <tr>
                    <th style="align-items: center;">Room</th>
                    @foreach ($datesInCurrentMonth as $date)
                        <th style="align-items: center;">{{ $date->format('d D') }}</th>
                    @endforeach
                </tr>
            </thead>
            @foreach ($room as $item)
                <tbody>
                    <tr>
                        <td class="toggle-details">
                            <a data-bs-toggle="collapse" class="d-flex align-items-center text-body" href="#collapsible-card-indicator-left1">
                                <i class="ph-caret-down collapsible-indicator me-2"></i>
                                {{ $item->room_name }}
                            </a>
                        </td> <!-- Toggle button column -->
                        @foreach ($datesInCurrentMonth as $date)
                            <td></td>
                        @endforeach
                    </tr>
                    <!-- Hidden row -->
                    <div class="hidden-row" style="display: none;">
                        <tr id="collapsible-card-indicator-left1">
                            <td>Availability</td>
                            @foreach ($datesInCurrentMonth as $date)
                                @php 
                                    $room_avail = App\Models\RoomAvailability::where('start_date', '<=', $date->toDateString())
                                                ->where('end_date', '>=', $date->toDateString())
                                                ->where('connected_room', 'LIKE', '%' .$item->room_name. '%')
                                                ->first();                    
                                @endphp

                                <td>
                                    @if (isset($room_avail) )
                                        {{ $room_avail->availability }}
                                    @else 
                                        -
                                    @endif
                                </td>
                            @endforeach
                        </tr>

                        <tr id="collapsible-card-indicator-left1">
                            <td>CTA</td>
                            @foreach ($datesInCurrentMonth as $date)
                                @php 
                                    $cta = App\Models\RoomAvailability::where('start_date', '<=', $date->toDateString())
                                                ->where('end_date', '>=', $date->toDateString())
                                                ->where('connected_room', 'LIKE', '%' .$item->room_name. '%')
                                                ->where('update_data', 'LIKE', '%cta%')
                                                ->first();                    
                                @endphp
                                <td>
                                    @if (isset($cta) )
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2"></i>
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                        
                        <tr id="collapsible-card-indicator-left1">
                            <td>CTD</td>
                            @foreach ($datesInCurrentMonth as $date)
                                @php 
                                    $ctd = App\Models\RoomAvailability::where('start_date', '<=', $date->toDateString())
                                                ->where('end_date', '>=', $date->toDateString())
                                                ->where('connected_room', 'LIKE', '%' .$item->room_name. '%')
                                                ->where('update_data', 'LIKE', '%ctd%')
                                                ->first();                    
                                @endphp

                                <td>
                                    @if (isset($ctd) )
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2"></i>
                                    @endif
                                </td>
                            @endforeach
                        </tr>

                        <tr id="collapsible-card-indicator-left1">
                            <td>Stop Sell</td>
                            @foreach ($datesInCurrentMonth as $date)
                                @php 
                                    $stop_sell = App\Models\RoomAvailability::where('start_date', '<=', $date->toDateString())
                                                ->where('end_date', '>=', $date->toDateString())
                                                ->where('connected_room', 'LIKE', '%' .$item->room_name. '%')
                                                ->where('update_data', 'LIKE', '%stop_sell%')
                                                ->first();                    
                                @endphp

                                <td>
                                    @if (isset($stop_sell))
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2"></i>
                                    @endif
                                </td>
                            @endforeach
                        </tr>

                        <tr id="collapsible-card-indicator-left1">
                            <td>Stop Sell Limit</td>
                            @foreach ($datesInCurrentMonth as $date)
                                @php 
                                    $stop_sell_lim = App\Models\RoomAvailability::where('start_date', '<=', $date->toDateString())
                                                ->where('end_date', '>=', $date->toDateString())
                                                ->where('connected_room', 'LIKE', '%' .$item->room_name. '%')
                                                ->first();                    
                                @endphp

                                <td>
                                    @if (isset($stop_sell_lim) )
                                       {{ $stop_sell_lim->stop_sell_limit }}
                                    @else 
                                        -
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    </div>
                </tbody>
            @endforeach
           
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