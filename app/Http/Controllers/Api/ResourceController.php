<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Property;
use App\Models\RatePlan;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function property()
    {
        try {
            $data = Property::orderBy('id', 'desc')->paginate(10);
            
            return $this->responseJson($data);
        } catch (\Throwable $th) {
            return $this->responseJson([], false, $th->getMessage());
        }
    }

    public function logActivity()
    {
        try {
            $data = Log::orderBy('id', 'desc')->paginate(10);
            
            return $this->responseJson($data);
        } catch (\Throwable $th) {
            return $this->responseJson([], false, $th->getMessage());
        }
    }

    public function roomManagement()
    {
        try {
            $data = Room::orderBy('id', 'desc')->paginate(10);
            
            return $this->responseJson($data);
        } catch (\Throwable $th) {
            return $this->responseJson([], false, $th->getMessage());
        }
    }

    public function ratePlan()
    {
        try {
            $data = RatePlan::all();
            
            return $this->responseJson($data);
        } catch (\Throwable $th) {
            return $this->responseJson([], false, $th->getMessage());
        }
    }

    public function roomAvailability()
    {
        try {
            $data = Room::all();
            $data['datesInCurrentMonth'] = $this->getAllDatesInCurrentMonth();
            
            return $this->responseJson($data);
        } catch (\Throwable $th) {
            return $this->responseJson([], false, $th->getMessage());
        }
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
