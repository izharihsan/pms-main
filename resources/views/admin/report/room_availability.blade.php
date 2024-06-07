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
                    {{-- <button class="btn btn-primary ms-1 btn-sm" data-bs-toggle="modal" data-bs-target="#modal_default">Export</button> --}}
                    <button class="btn btn-primary ms-1 btn-sm" onclick="exportTableToCSV('tableData.csv')">Export</button>
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
        <table class="table datatable-fixed-left table-bordered">
            <thead class="text-center">
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">User</th>
                    <th colspan="2">Date</th>
                    <th rowspan="2">Property Name</th>
                    <th rowspan="2">Connected Room</th>
                    <th colspan="5">Total</th>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    {{-- TOTAL --}}
                    <th>Availability</th>
                    <th>COA</th>
                    <th>COD</th>
                    <th>Stop Sell</th>
                    <th>Stop Sell Limit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->user->name ?? null }}</td>
                        <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $item->action }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 
</div>

@endsection

@push('js')
<script>
    function exportTableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");
        
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll("td, th");
            
            for (var j = 0; j < cols.length; j++) {
                row.push(cols[j].innerText);
            }
            
            csv.push(row.join(","));
        }

        // Download CSV file
        var csvFile = new Blob([csv.join("\n")], { type: "text/csv" });
        var downloadLink = document.createElement("a");
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
    }
</script>
@endpush