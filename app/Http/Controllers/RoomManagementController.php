<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomManagementController extends Controller
{
    public function index()
    {
        return view('admin.roomManagement.index');
    }
}
