<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::all()->each(function ($city) {
            $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/districts/' . $city->id . '.json');
            if ($response->successful()) {
                $district = $response->json();
                $city->district()->createMany($district);
            }
        });
    }
}
