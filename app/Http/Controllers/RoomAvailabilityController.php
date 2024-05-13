<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomAvailabilityController extends Controller
{
    public function index()
    {
        return view('admin.roomAvailability.index');
    }
}
