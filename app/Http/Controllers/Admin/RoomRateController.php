<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomRates;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RoomRatesDetails;
use Carbon\Carbon;
use App\Models\RatePlan;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class RoomRateController extends Controller
{
    public function index()
    {
        if (Auth::user()->property_id == null) {
            return redirect()->route('admin.property.create');
        }
        
        $property = Property::find(Auth::user()->property_id);
        $datesInCurrentMonth = $this->getAllDatesInCurrentMonth();
        $rooms = Room::where('property_id', Auth::user()->property_id)->get();
        // $this->log('View Room Rate', null);

        return view('admin.roomRate.index', compact('datesInCurrentMonth', 'rooms', 'property'));
    }

    public function create(Request $request)
    {
        $property = Property::find(Auth::user()->property_id);
        // dd($property);
        $room = Room::where('property_id', Auth::user()->property_id)->get();
        
        return view('admin.roomRate.create', compact('room', 'property'));
    }


    public function store(Request $request)
    {
        // dd($request);
        $rooms = implode(', ', $request->rooms_id);
        // dd($rooms);

        $requestData = array_merge($request->all(), [
            'rooms'             => $rooms,
        ]);

        # get room details
        $explode = explode(', ', $rooms);
        $rooms = Room::whereIn('id', $explode)->get();

        $roomsWithRatePlans = [];
        $connected_room = [];

        foreach ($rooms as $room) {
            array_push($connected_room, $room->room_name);

            $ratePlans = RatePlan::where('connected_rooms', 'LIKE', '%' . $room->room_name . '%')->get();
            $roomsWithRatePlans[] = [
                'room' => $room,
                'ratePlans' => $ratePlans
            ];
        }

        $connected_rooms = implode(', ', $connected_room);

        $data = RoomRates::create($requestData);
        $action = 'Add New Room Rate';

        $this->log($action, 'room_rate_id', $data->id, $connected_rooms);

       

        // dd($roomsWithRatePlans);

        // Alert::success('Success Title', 'Berhasil Menyimpan Data');
        // return redirect()->route('admin.room-rates.details', $data->id);
        return json_encode([
            'room_rate'     => $data,
            'rooms'         => $rooms,
            'rate_plans'    => $roomsWithRatePlans
        ]);
    }

    public function details($id)
    {
        $room_rate = RoomRates::find($id);
        $explode = explode(', ', $room_rate->rooms);

        $rooms = Room::whereIn('id', $explode)->get();
        // dd($rooms);


        return view('admin.roomRate.details', compact('room_rate', 'rooms', 'id'));
    }

    public function store_details(Request $request)
    {
        // dd($request);
        $room_rate = RoomRates::find($request->room_rates_id);
        $explode = explode(', ', $room_rate->rooms);

        $rooms = Room::whereIn('id', $explode)->get();

        foreach ($rooms as $key => $value) {
            // dd($request->stop_sell[$value->id]);
            $insert = RoomRatesDetails::create([
                'room_rates_id' => $room_rate->id,
                'rate_plan_id'  => $request->rate_plan[$value->id],
                'stop_sell'     => isset($request->stop_sell[$value->id]) ? true : false,
                'room_id'       => $value->id,
                'minimum_rate'  => $request->minimum_rate[$value->id] 
            ]);
        }
      

        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.room-rates.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = RoomRates::find($id);
        $property = Property::find($data->property_id);
        // dd($data);
        $room = Room::where('property_id', Auth::user()->property_id)->get();
        $room_explode = explode(', ', $data->rooms);
        $rooms_details = Room::whereIn('id', $room_explode)->get();
        // $room_rates_details = RoomRatesDetails::where('')
        // dd($room_explode);

        return view('admin.roomRate.edit', compact('data', 'room', 'room_explode', 'rooms_details', 'property'));
    }

    public function update(Request $request, string $id)
    {
        $room_rates = RoomRates::find($id);
        $rooms = implode(', ', $request->rooms_id);
        // dd($rooms);

        $requestData = array_merge($request->all(), [
            'rooms'             => $rooms,
        ]);

        $explode = explode(', ', $rooms);
        $rooms = Room::whereIn('id', $explode)->get();

        $roomsWithRatePlans = [];
        $connected_room = [];

        foreach ($rooms as $room) {
            array_push($connected_room, $room->room_name);

            $ratePlans = RatePlan::where('connected_rooms', 'LIKE', '%' . $room->room_name . '%')->get();
            $roomsWithRatePlans[] = [
                'room' => $room,
                'ratePlans' => $ratePlans
            ];
        }

        $action = 'Update Room Rate';
        $connected_rooms = implode(', ', $connected_room);
        $this->log($action, 'room_rate_id', $room_rates->id, $connected_rooms);

        $room_rates->update($requestData);
       
    

        return json_encode([
            'room_rate'     => $room_rates,
            'rooms'         => $rooms,
            'rate_plans'    => $roomsWithRatePlans
        ]);
    }

    public function destroy(string $id)
    {
        //
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
