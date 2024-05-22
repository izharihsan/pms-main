<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; 
use App\Models\RoomAvailability;
use RealRashid\SweetAlert\Facades\Alert; 
use Carbon\Carbon;

class RoomAvailabilityController extends Controller
{
    public function index()
    {
        $this->log('View Rate Plan', null);
        $room = Room::all();
        $datesInCurrentMonth = $this->getAllDatesInCurrentMonth();

        return view('admin.roomAvailability.index', compact('room', 'datesInCurrentMonth'));
    }

    public function store(Request $request)
    {
        if (isset($request->connected_rooms)) {
            $connected_types = array_keys($request->connected_rooms);
            $connected_rooms = implode(', ', $connected_types);
        }

        if (isset($request->update_data)) {
            $availability_types = array_keys($request->update_data);
            $update_data = implode(', ', $availability_types);
        }

        $requestData = array_merge($request->all(), [
            'connected_room'    => $connected_rooms,
            'update_data'       => $update_data,
        ]);

        $this->log('Create Rate Plan', null);
        $data = RoomAvailability::create($requestData);

        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.room_availability.index');
    }

    private function getAllDatesInCurrentMonth()
    {
        $startDate = Carbon::now()->subDays(2); // 2 days before today
        $endDate = Carbon::now()->addDays(6);   // 7 days from today
        $dates = collect();
    
        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {
            $dates->push($date->copy());
        }
    
        return $dates;
    }
}
