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
        <nav>
			<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">General Information</button>
				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Facilities</button>
				<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Photos</button>
			</div>
		</nav>
		<div class="tab-content p-3 border" id="nav-tabContent">
			<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<h6 class="text-primary">Room Specification</h6>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="fw-bold">Room Name<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required value="Deluxe Sweet">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold">Room Type<strong class="text-danger">*</strong></label>
                        <select name="" class="form-control" id="">
                            <option value="">Executive Rooms</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold">Number Of Rooms<strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col"><input type="number" class="form-control" value="15"></div>
                            <div class="col">Rooms</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="fw-bold">Max Occupancy<strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col"><input type="number" class="form-control" value="5"></div>
                            <div class="col">Persons</div>
                        </div>
                    </div>
                </div>
                <br>

				<h6 class="text-primary">Bedroom</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">Bedroom 1</div>
                            <div class="col">
                                <div class="input-group" style="width: 70%">
                                    <input type="button" value="-" class="button-minus btn btn-light" data-field="quantity">
                                    <input type="number" step="1" max="" style="width: 50% !important" value="1" name="quantity" class="quantity-field form-control">
                                    <input type="button" value="+" class="button-plus btn btn-light" data-field="quantity ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-2">Bedroom 2</div>
                            <div class="col">
                                <div class="input-group mt-2" style="width: 70%">
                                    <input type="button" value="-" class="button-minus btn btn-light" data-field="quantity">
                                    <input type="number" step="1" max="" style="width: 50% !important" value="1" name="quantity" class="quantity-field form-control">
                                    <input type="button" value="+" class="button-plus btn btn-light" data-field="quantity ">
                                </div>
                                <br>
                                <a href="" style="font-size: 10px"><span><i class="ph-plus"></i> Add Another Bed Type</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="" class="form-control" id="">
                            <option value="">Queen</option>
                        </select>
                        <select name="" class="form-control mt-2" id="">
                            <option value="">Queen</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-light btn-sm"><i class="ph-plus"></i> Add Bedroom</button>
                    </div>
                </div>
                <br>
				<h6 class="text-primary">Room Size</h6>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Room Width<strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col">
                                <input type="number" name="" value="6" class="form-control" id="">
                            </div>
                            <div class="col">Meters</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Length<strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col">
                                <input type="number" name="" value="7" class="form-control" id="">
                            </div>
                            <div class="col">Meters</div>
                        </div>
                    </div>
                </div>
                <br>
				<h6 class="text-primary">Room Rate</h6>
                <div class="col-md-6">
                    <label for="">Minimum Rate<strong class="text-danger">*</strong></label>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="form-control bg-light">IDR</button>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="200.000">
                        </div>
                    </div>
                    
                    <label for="">Extra Guest Fee<strong class="text-danger">*</strong></label>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="form-control bg-light">IDR</button>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" value="75.000">
                        </div>
                    </div>
                </div>
                <br>
				<h6 class="text-primary">Extr Bed Information</h6>
                <div class="row">
                    <div class="col">
                        <label for="">Max extra Bed <strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" value="1">
                            </div>
                            <div class="col">
                                Pieces
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="">Max extra Bed <strong class="text-danger">*</strong></label>
                        <div class="row">
                            <div class="col-md-2">
                                <button class="form-control bg-light">IDR</button>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" value="10.000">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <button class="btn btn-primary mt-2 btn-sm text-end">Save</button>
                </div>
			</div>
            {{-- facilities --}}
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
				<h6 class="text-primary">Property Facilities</h6>
                <div style="border: 1px; border-radius:5px; background: rgba(112, 207, 183, 0.8); padding:10px">
                    <h6 class="mb-0">Mandatory Facilities</h6>
                    <span>Must Have at least 3 facilities</span>
                </div>
                <br>
                <div class="accordion" id="accordion_expanded">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="expanded_item1" class="accordion-collapse collapse show" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <span class="fw-semibold">This is the first item's accordion body.</span> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="expanded_item2" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <span class="fw-semibold">This is the second item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="expanded_item3" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">
                                <span class="fw-semibold">This is the third item's accordion body.</span> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-2 btn-sm float-end mb-2">Save</button>
			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
				<p><strong>This is some placeholder content the Contact tab's associated content.</strong>
					Clicking another tab will toggle the visibility of this one for the next.
					The tab JavaScript swaps classes to control the content visibility and styling. You can use it with
					tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
			</div>
		</div>
    </div>
</div>

@endsection