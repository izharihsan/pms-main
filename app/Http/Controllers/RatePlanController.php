<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatePlanController extends Controller
{
    public function index()
    {
        return view('admin.ratePlan.index');
    }

    public function form(){
        return view('admin.ratePlan.form');
    }
}
