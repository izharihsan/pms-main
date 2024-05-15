<form class="forms-sample" method="POST" action="{{ route('roomRate.update', [$data->id]) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-sm-12">

            <div class="mb-3">
                <label class="form-label">Rate Plan</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Serch Rate Plan</option>
                    <option value="1">One</option>
                </select>
            </div>
            <label class="form-check-label mb-2" for="flexSwitchCheckChecked">Stop Sell</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            </div>
            <div class="mb-3">
                <label class="form-label">Rate <span class="text-danger">(Minimum rate: IDR 200.000)</span></label>
                <div class="row">
                    <div class="col-2">
                        <input type="text" name="end_date" value="IDR" class="form-control required" placeholder="">
                    </div>
                    <div class="col">
                        <input type="text" name="end_date" class="form-control required" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BUTTON SUBMIT --}}
    <div class="text-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

@include('include.script')