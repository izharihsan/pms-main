<?php

namespace App\Exports;

use App\Models\RatePlan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;

class RatePlanExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RatePlan::where('property_id', Auth::user()->property_id)->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Rate Plan Name',
            'Cancelation Policy',
            'Meals',
            'Description',
            'Connected Rooms'
        ];
    }

    public function map($data): array
    {
        return [
            $data->id,
            $data->name,
            $data->cancelation_policy,
            $data->meals ?? '-',
            $data->description,
            $data->connected_rooms,
        ];
    }
}
