<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data = Log::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.report.index', compact('data'));
    }
}
