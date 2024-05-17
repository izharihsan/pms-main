@extends('layouts.admin')
@section('title', 'Room Management')
@section('content')
@section('rate_plan', 'active')

<?php

    $selectedMeals = null;
    
    if (isset($data) && $data->meals) {
        $selectedMeals = $data->meals;
    }

    $selected_room = null;

    if (isset($data) && $data->connected_rooms) {
        $selected_room = $data->connected_rooms;
    }
?>

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
        <form action="{{ route('admin.rate_plan.store') }}" method="POST">
            @csrf
            <div class="row">
                <input type="hidden" name="rate_plan_id" @isset($data) value="{{ $data->id }}" @endisset>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="fw-bold">Rate Plan Name<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Input Rate Plan" name="name" @isset($data) value="{{ $data->name }}" @endisset>
                    </div>
                    <div class="form-group">
                        <label for="" class="fw-bold">Description<strong class="text-danger">*</strong></label>
                        <input type="text" class="form-control" required placeholder="Input Description" name="description" @isset($data) value="{{ $data->description }}" @endisset>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="fw-bold">Cancelation Policy<strong class="text-danger">*</strong></label>
                        <select name="cancelation_policy" id="" class="form-control" required>
                            <option value="">Pilih Cancelation Policy</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 7D prior arrival 100% charge. No Show 100% charge.") selected @endif @endisset value="Cancel 7D prior arrival 100% charge. No Show 100% charge.">Cancel 7D prior arrival 100% charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 21D prior arrival 50% charge. No Show 100% charge.") selected @endif @endisset value="Cancel 21D prior arrival 50% charge. No Show 100% charge.">Cancel 21D prior arrival 50% charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 31D prior arrival 2D charge. No Show 100% charge.") selected @endif @endisset value="Cancel 31D prior arrival 2D charge. No Show 100% charge.">Cancel 31D prior arrival 2D charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 21D prior arrival 1N charge. No Show 100% charge.") selected @endif @endisset value="Cancel 21D prior arrival 1N charge. No Show 100% charge.">Cancel 21D prior arrival 1N charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 31D prior arrival 100% charge. No Show 100% charge.") selected @endif @endisset value="Cancel 31D prior arrival 100% charge. No Show 100% charge.">Cancel 31D prior arrival 100% charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 45D prior arrival 2D charge. No Show 100% charge.") selected @endif @endisset value="Cancel 45D prior arrival 2D charge. No Show 100% charge.">Cancel 45D prior arrival 2D charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 4D prior arrival 1N charge. No Show 100% charge.") selected @endif @endisset value="Cancel 4D prior arrival 1N charge. No Show 100% charge.">Cancel 4D prior arrival 1N charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 4D prior arrival 1D charge. No Show 100% charge.") selected @endif @endisset value="Cancel 4D prior arrival 1D charge. No Show 100% charge.">Cancel 4D prior arrival 1D charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 10D prior arrival 50% charge. No Show 100% charge.") selected @endif @endisset value="Cancel 10D prior arrival 50% charge. No Show 100% charge.">Cancel 10D prior arrival 50% charge. No Show 100% charge.</option>
                            <option @isset($data) @if($data->cancelation_policy == "Cancel 1D prior arrival 1N charge. No Show 100% charge.") selected @endif @endisset value="Cancel 1D prior arrival 1N charge. No Show 100% charge.">Cancel 1D prior arrival 1N charge. No Show 100% charge.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="fw-bold">Meals<strong class="text-danger">*</strong></label> <br>
                        <input type="radio" id="meals_radio1" name="meals_radio" value="false" @isset($data) @if($data->meals == null) checked @endif @endisset>
                        <label for="nomeals">No Meals</label>
                        <input type="radio" id="meals_radio2" name="meals_radio" value="true" @isset($data) @if($data->meals !== null) checked @endif @endisset>
                        <label for="meals-available">Meals Available</label>
                        <br>
                        <div id="meals_form">
                            <input type="checkbox" id="breakfast" name="meals[breakfast]">
                            <label for="breakfast">Breakfast</label>
                            <input type="checkbox" id="launch" name="meals[launch]">
                            <label for="launch">Lunch</label>
                            <input type="checkbox" id="dinner" name="meals[dinner]">
                            <label for="dinner">Dinner</label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <hr>
                <label for="" class="fw-bold">Connected Room</label><br>
                @foreach ($room as $item)
                    <input type="checkbox" id="{{ $item->room_name }}" name="connected_rooms[{{ $item->room_name }}]">
                    <label for="{{ $item->room_name }}">{{ $item->room_name }}</label>
                @endforeach
            </div>
            <div class="float-end mt-4">
                <a href="{{ route('admin.rate_plan.index') }}" class="btn btn-sm btn-outline-primary">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
            </div>
        </form>
    </div> 
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectedMeals = "<?php echo $selectedMeals; ?>";
        if (selectedMeals !== null) {
            var selectedMealsArray = selectedMeals.split(', ');

            selectedMealsArray.forEach(function(meal) {
                var checkbox = document.getElementById(meal.trim());
                if (checkbox) {
                    checkbox.checked = true;
                }
            });
        }

        var selected_room = "<?php echo $selected_room; ?>";
        if (selected_room !== null) {
            var selected_room_array = selected_room.split(', ');

            selected_room_array.forEach(function(room) {
                var checkbox = document.getElementById(room.trim());
                if (checkbox) {
                    checkbox.checked = true;
                }
            });
        }

        $('#meals_form').hide();

        var noMealsRadio = document.getElementById('meals_radio1');
        var mealsAvailableRadio = document.getElementById('meals_radio2');

        if (mealsAvailableRadio.checked) {
            $('#meals_form').show();
        }

        noMealsRadio.addEventListener('click', function() {
            $('#meals_form').hide();
        });

        mealsAvailableRadio.addEventListener('click', function() {
            $('#meals_form').show();
        });
    });
</script>
