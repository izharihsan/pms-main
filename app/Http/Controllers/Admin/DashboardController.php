<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $property = Property::orderBy('id', 'desc')->where('user_id', Auth()->user()->id)->get();
        $log = Log::orderBy('id', 'desc')->where('user_id', Auth()->user()->id)->paginate(10);

        $this->log('View Dashboard', null);

        return view('admin.dashboard', compact('property', 'log'));
    }
}
