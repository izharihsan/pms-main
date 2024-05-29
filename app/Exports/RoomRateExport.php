<?php

namespace App\Exports;

use App\Models\RoomRates;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;


class RoomRateExport implements FromView
{
    protected $datesInCurrentMonth;

    public function __construct($datesInCurrentMonth)
    {
        $this->datesInCurrentMonth = $datesInCurrentMonth;
    }

    public function view(): View
    {
        $rooms = Room::where('property_id', Auth::user()->property_id)->get();
        // dd($rooms);

        return view('admin.roomRate.export', [
            'data'                  => RoomRates::all(),
            'datesInCurrentMonth'   => $this->datesInCurrentMonth,
            'rooms'                 => $rooms
        ]);
    }
}
