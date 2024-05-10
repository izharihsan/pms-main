<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatePlan;
use RealRashid\SweetAlert\Facades\Alert;

class RatePlanController extends Controller
{
    public function index()
    {
        $data = RatePlan::all();

        return view('admin.ratePlan.index', compact('data'));
    }

    public function form($id = null)
    {
        $data = null;
        if ($id) {
            $data = RatePlan::find($id);
        }

        return view('admin.ratePlan.form', compact('data'));
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

        // dd($requestData);

        $data = RatePlan::create($requestData);

        Alert::success('Success Title', 'Berhasil Menyimpan Data');
        return redirect()->route('admin.rate_plan.index');
    }
}
