<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    protected function atomic(Closure $callback)
    {
        return DB::transaction($callback);
    }

    protected function log($action = null, $table = null, $table_value = null, $connected_room = null)
    {
        if (!auth()->check()) {
            return abort(401);
        }
        
        Log::create([
            'user_id' => auth()->user()->id,
            'action' => $action,
            'connected_room' => $connected_room,
            'ip_address' => request()->ip() ?? 'localhost',
            "$table" => $table_value
        ]);
    }

    public function responseJson($data = [], $status = true, $message = 'Data retrieved successfully')
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
}
