<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function activity()
    {
        $data = Log::orderBy('id', 'desc')->paginate(10);

        foreach ($data as $key => $value) {
            if ($value->property_id) {
                $value['action'] = $value->action.' '. ($value->property->name ?? null);
            }elseif ($value->room_id) {
                $value['action'] = $value->action.' '. ($value->room->room_name ?? null);
            }
        }
        
        return view('admin.report.activity', compact('data'));
    }

    public function property()
    {
        $data = Log::whereNotNull('property_id')->orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.property', compact('data'));
    }

    public function roomManagement()
    {
        $data = Log::whereNotNull('room_id')->orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.room_management', compact('data'));
    }

    public function roomRate()
    {
        $data = Log::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.room_rate', compact('data'));
    }

    public function ratePlan()
    {
        $data = Log::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.rate_plan', compact('data'));
    }

    public function roomAvailability()
    {
        $data = Log::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.room_availability', compact('data'));
    }
}
