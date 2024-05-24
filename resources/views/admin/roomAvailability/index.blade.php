@extends('layouts.admin')
@section('title', 'Room Availability')
@section('content')
@section('room_availability', 'active')

@push('css')
    <style>
        .highlight-current-date {
            border-left: 2px solid red;
        }
    </style>
@endpush

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Room Availabilities</h5>
                {{-- <h6 class="mb-0">Bali Bird Resort</h6> --}}
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    <button class="btn btn-outline-primary btn-sm"><i class="ph-funnel"></i> Filter</button>
                    <a href="#" class="btn btn-primary ms-1 btn-sm"><i class="ph-arrow-line-up"></i> Push</a>
                    {{-- <a href="{{ route('admin.room_availability.create') }}" class="btn btn-primary ms-1 btn-sm"><i class="ph-plus"></i> Bulk Add / Update</a> --}}
                    <a href="#" class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default"><i class="ph-plus"></i> Bulk Add / Update</a>
                </div>
            </div>
        </div>
    </div>

    

     <!-- Basic modal -->
     <div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Select Property</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

                <form action="{{ route('admin.room_availability.create') }}" method="GET">
                   
				    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="fw-bold">Property Name<strong class="text-danger">*</strong></label>
                                <select name="property_id" id="" class="form-control" required>
                                    <option value="">Select Property</option>
                                    @foreach ($property as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
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
                            <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}"></td>
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

                                <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}">
                                    @if (isset($room_avail) )
                                        <a href="{{ route('admin.room_availability.edit', $room_avail->id) }}">{{ $room_avail->availability }}</a>
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
                                <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}">
                                    @if (isset($cta) )
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2" style="color: red;"></i>
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

                                <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}">
                                    @if (isset($ctd) )
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2" style="color: red;"></i>
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

                                <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}">
                                    @if (isset($stop_sell))
                                        <i class="ph-check collapsible-indicator me-2"></i>
                                    @else 
                                        <i class="ph-x collapsible-indicator me-2" style="color: red;"></i>
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

                                <td class="{{ $date->isToday() ? 'highlight-current-date' : '' }}">
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