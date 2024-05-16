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

    protected function log($action = null, $connected_room = null)
    {
        Log::create([
            'user_id' => auth()->user()->id,
            'action' => $action,
            'connected_room' => $connected_room,
            'ip_address' => request()->ip() ?? 'localhost',
        ]);
    }
}
