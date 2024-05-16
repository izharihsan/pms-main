<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $property = Property::orderBy('id', 'desc')->get();
        $this->log('View Dashboard', null);
        
        return view('admin.dashboard', compact('property'));
    }
}
