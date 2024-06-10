@extends('layouts.admin')
@section('title', 'Report')
@section('content')
@section('report', 'active')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Log Property</h5>
            </div>
            <div class="col">
                <div class="float-end mt-4">
                    {{-- <button class="btn btn-outline-primary btn-sm"><i class="ph-funnel"></i> Filter</button> --}}
                    <button class="btn btn-primary ms-1 btn-sm" onclick="exportTableToPDF('tableData.pdf')">Export PDF</button>
                    <button class="btn btn-primary ms-1 btn-sm" onclick="exportTableToCSV('tableData.csv')">Export Excel</button>
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
        <table id="dataTable" class="table datatable-fixed-left">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                    <th>PC (IP)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->user->name ?? null }}</td>
                        <td>{{ $item->created_at->format('d-m-Y H:i:s') }}</td>
                        <td>{{ $item->action.' '.($item->property->name ?? null) }}</td>
                        <td>{{ $item->ip_address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 
</div>

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
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

    function exportTableToPDF(filename) {
            var doc = new jspdf.jsPDF();
            var table = document.getElementById('dataTable');
            var rows = table.querySelectorAll('tr');

            var rowData = [];
            rows.forEach(function(row) {
                var rowText = [];
                row.querySelectorAll('th, td').forEach(function(cell) {
                    rowText.push(cell.innerText);
                });
                rowData.push(rowText);
            });

            doc.autoTable({
                head: [rowData[0]],
                body: rowData.slice(1),
            });

            doc.save(filename);
        }
</script>
@endpush