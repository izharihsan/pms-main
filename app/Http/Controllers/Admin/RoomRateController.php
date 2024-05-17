<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomRates;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\RoomRatesDetails;
use Carbon\Carbon;

class RoomRateController extends Controller
{
    public function index()
    {
        $datesInCurrentMonth = $this->getAllDatesInCurrentMonth();
        $rooms = Room::all();
        $this->log('View Room Rate', null);

        return view('admin.roomRate.index', compact('datesInCurrentMonth', 'rooms'));
    }

    public function create()
    {
        $room = Room::all();
        
        return view('admin.roomRate.create', compact('room'));
    }


    public function store(Request $request)
    {
        $rooms = implode(', ', $request->rooms_id);
        // dd($rooms);

        $requestData = array_merge($request->all(), [
            'rooms'             => $rooms,
        ]);

        $data = RoomRates::create($requestData);

        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.room-rates.details', $data->id);
    }

    public function details($id)
    {
        $room_rate = RoomRates::find($id);
        $explode = explode(', ', $room_rate->rooms);

        $rooms = Room::whereIn('id', $explode)->get();
        // dd($rooms);


        return view('admin.roomRate.details', compact('room_rate', 'rooms', 'id'));
    }

    public function store_details(Request $request, $id)
    {
        // dd($request);
        $room_rate = RoomRates::find($id);
        $explode = explode(', ', $room_rate->rooms);

        $rooms = Room::whereIn('id', $explode)->get();

        foreach ($rooms as $key => $value) {
            // dd($request->stop_sell[$value->id]);
            $insert = RoomRatesDetails::create([
                'room_rates_id' => $room_rate->id,
                'rate_plan_id'  => $request->rate_plan[$value->id],
                'stop_sell'     => true,
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
        return view('admin.roomRate.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    private function getAllDatesInCurrentMonth()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $dates = collect();

        for ($date = $startOfMonth; $date->lte($endOfMonth); $date->addDay()) {
            $dates->push($date->copy());
        }

        return $dates;
    }
}
