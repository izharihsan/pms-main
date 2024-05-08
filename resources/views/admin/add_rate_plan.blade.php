@extends('layouts.admin')
@section('title', 'Room Management')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="mb-0 text-primary">Rate Plan</h5>
                <h6 class="mb-0">Bali Bird Resort</h6>
                <span class="mb-0">Rate Plan Management</span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h6>Add New Rate Plan</h6>
        <form action="" method="post">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="fw-bold">Rate Plan Name<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="E.g Room Only">
                    </div>
                    <div class="form-group">
                        <label for="" class="fw-bold">Description<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Rate plan description">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="fw-bold">Cancelation Policy<strong class="text-danger">*</strong></label>
                        <select name="" id="" class="form-control" required>
                            <option value="" disabled selected>Pilih Cancelation Policy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="fw-bold">Meals<strong class="text-danger">*</strong></label> <br>
                        <input type="radio" name="meals" id="nomeals">
                        <label for="nomeals">No Meals</label>
                        <input type="radio" name="meals" id="meals-available">
                        <label for="meals-available">Meals Available</label>
                        <br>
                        {{-- launch,break --}}
                        <input type="checkbox" id="breakfast" name="ml_avai">
                        <label for="breakfast">Breakfats</label>
                        <input type="checkbox" id="launch" name="ml_avai">
                        <label for="launch">Launch</label>
                        <input type="checkbox" id="dinner" name="ml_avai">
                        <label for="dinner">Dinner</label>
                    </div>
                </div>
            </div>
            <div>
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
            <div class="float-end mt-4">
                <a href="rate_plan" class="btn btn-sm btn-outline-primary">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </form>
    </div> 
</div>
@endsection