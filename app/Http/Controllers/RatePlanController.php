<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatePlan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Room; 

class RatePlanController extends Controller
{
    public function index()
    {
        $data = RatePlan::all();
        $this->log('View Rate Plan', null);

        return view('admin.ratePlan.index', compact('data'));
    }

    public function form($id = null)
    {
        $room = Room::all();
        $data = null;
        if ($id) {
            $data = RatePlan::find($id);
        }

        return view('admin.ratePlan.form', compact('data', 'room'));
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
       
        $requestData = array_merge($request->all(), [
            'meals'             => $meals,
            'connected_rooms'   => $connected_room,
        ]);

        if ($request->rate_plan_id) {
            $data = RatePlan::find($request->rate_plan_id);
            $this->log('Update Rate Plan', null);

            $data->update($requestData);
        }else{
            $this->log('Create Rate Plan', null);
            $data = RatePlan::create($requestData);
        }

    
        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.rate_plan.index');
    }

    public function destroy($id)
    {
        $data = RatePlan::find($id);
        $data->delete();

        $this->log('Delete Rate Plan', null);

        Alert::success('Success Title', 'Berhasil Menghapus Data');
        return redirect()->route('admin.rate_plan.index');
    }

    public function show($id = null)
    {
        $data = RatePlan::find($id);

        return view('admin.ratePlan.detail', compact('data'));
    }
}
