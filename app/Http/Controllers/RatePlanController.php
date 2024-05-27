<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatePlan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Room;
use App\Models\Property;
use App\Models\RatePlanDetails;
use Illuminate\Support\Facades\Auth;

class RatePlanController extends Controller
{
    // Asumsi metode log sudah ada di controller
    // protected function log($message, $data)
    // {
    //     // Implementasi logging di sini
    // }

    public function index(Request $request)
    {
        if (Auth::user()->property_id == null) {
            return redirect()->route('admin.property.create');
        }

        $property = Property::find(Auth::user()->property_id);
        // dd($request->room);

        if (isset($request->meals) || isset($request->room)) {
            if ($request->meals !== 'all' && $request->room !== 'all') {
                $data = RatePlan::where('meals', 'LIKE', '%'. $request->meals .'%')
                ->where('connected_rooms', 'LIKE', '%'. $request->room .'%')
                ->get();
            }else{
                $data = RatePlan::where('property_id', Auth::user()->property_id)->get();
            }
        }else{
            $data = RatePlan::where('property_id', Auth::user()->property_id)->get();
        }
 

        $rooms = Room::where('property_id', Auth::user()->property_id)->get();

        return view('admin.ratePlan.index', compact('data', 'rooms', 'property'));
    }

    public function form(Request $request, $id = null)
    {
        // dd(Auth::user()->property_id);
        $room = Room::where('property_id', Auth::user()->property_id)->get();
        $property = Property::find(Auth::user()->property_id);

        $data = null;
        if ($id) {
            $data = RatePlan::find($id);

            if ($data->property_id !== null) {
                $property = Property::find(Auth::user()->property_id);
                $room = Room::where('property_id', $data->property_id)->get();
            }else{
                $room = Room::where('property_id', Auth::user()->property_id)->get();
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
            $data->update($requestData);

            $action = 'Update Rate Plan '.$data->name;
            $this->log($action, 'rate_plan_id', $data->id, $connected_room);
        } else {
            $action = 'Add New Rate Plan '.$request->name;

            $data = RatePlan::create($requestData);
            $this->log($action, 'rate_plan_id', $data->id, $connected_room);
        }

        # Add rate plant details
        foreach ($room as $key => $value) {
            $rate_plan_d = RatePlanDetails::create([
                'rate_plan_id'  => $data->id,
                'rooms_id'      => $value->id
            ]);
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
            $action = 'Delete Rate Plan '.$data->name;
            $this->log($action, 'rate_plan_id', $data->id, $data->connected_rooms);

            $data->delete();
            Alert::success('Success Title', 'Berhasil Menghapus Data');
        } else {
            Alert::error('Error Title', 'Data Tidak Ditemukan');
        }

        return redirect()->route('admin.rate_plan.index');
    }

    public function show($id = null)
    {
        $data = RatePlan::find($id);
        $room = Room::where('property_id', Auth::user()->property_id)->get();

        return view('admin.ratePlan.detail', compact('data', 'room'));
    }
}
