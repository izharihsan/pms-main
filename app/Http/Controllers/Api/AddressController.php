<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function province()
    {
        $data = Province::all();
        
        return $data;
    }

    public function city(Request $request)
    {
        $data = Province::find($request->province_id)->city;
        
        return $data;
    }

    public function district(Request $request)
    {
        $data = City::find($request->city_id)->district;
        
        return $data;
    }

    public function village(Request $request)
    {
        $data = District::find($request->district_id)->village;
        
        return $data;
    }
}
