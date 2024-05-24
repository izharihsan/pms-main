<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatePlan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Room;
use App\Models\Property;
use App\Models\RatePlanDetails;

class RatePlanController extends Controller
{
    // Asumsi metode log sudah ada di controller
    // protected function log($message, $data)
    // {
    //     // Implementasi logging di sini
    // }

    public function index(Request $request)
    {
        $property = Property::all();
        // dd($request->room);

        if (isset($request->meals) || isset($request->room)) {
            if ($request->meals !== 'all' && $request->room !== 'all') {
                $data = RatePlan::where('meals', 'LIKE', '%'. $request->meals .'%')
                ->where('connected_rooms', 'LIKE', '%'. $request->room .'%')
                ->get();
            }else{
                $data = RatePlan::all();
            }
        }else{
            $data = RatePlan::all();
        }
 

        $rooms = Room::all();

        $this->log('View Rate Plan', '');

        return view('admin.ratePlan.index', compact('data', 'rooms', 'property'));
    }

    public function form(Request $request, $id = null)
    {
        // dd($request->property_id);
        $room = Room::where('property_id', $request->property_id)->get();
        $property = Property::find($request->property_id);

        $data = null;
        if ($id) {
            $data = RatePlan::find($id);
            if ($data->property !== null) {
                $property = Property::find($data->property_id);
                $room = Room::where('property_id', $data->property_id)->get();
            }else{
                $room = Room::all();
            }
        }

        return view('admin.ratePlan.form', compact('data', 'room', 'property'));
    }

    public function store(Request $request)
    {
        $meals = null;
        $connected_room = null;

        if (isset($request->meals)) {
            $mealTypes = array_keys($request->meals);
            $meals = implode(', ', $mealTypes);
        }

        if (isset($request->connected_rooms)) {
            $connected_types = array_keys($request->connected_rooms);
            $connected_room = implode(', ', $connected_types);
        }

        $room = Room::whereIn('room_name', $connected_types)->get();
        // dd($room);

        $requestData = array_merge($request->all(), [
            'meals'             => $meals,
            'connected_rooms'   => $connected_room,
        ]);

        if ($request->rate_plan_id) {
            $data = RatePlan::find($request->rate_plan_id);
            $this->log('Update Rate Plan', null);
            $data->update($requestData);
        } else {
            $this->log('Create Rate Plan', null);
            $data = RatePlan::create($requestData);
        }

        # Add rate plant details
        foreach ($room as $key => $value) {
            $rate_plan_d = RatePlanDetails::create([
                'rate_plan_id'  => $data->id,
                'rooms_id'      => $value->id
            ]);
        }

        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.rate_plan.index');
    }

    public function destroy($id)
    {
        $data = RatePlan::find($id);
        if ($data) {
            $data->delete();
            $this->log('Delete Rate Plan', null);
            Alert::success('Success Title', 'Berhasil Menghapus Data');
        } else {
            Alert::error('Error Title', 'Data Tidak Ditemukan');
        }

        return redirect()->route('admin.rate_plan.index');
    }

    public function show($id = null)
    {
        $data = RatePlan::find($id);

        return view('admin.ratePlan.detail', compact('data'));
    }
}
