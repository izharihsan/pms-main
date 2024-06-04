<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Province::all()->each(function ($province) {
            $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/regencies/' . $province->id . '.json');
            if ($response->successful()) {
                $city = $response->json();
                $province->city()->createMany($city);
            }
        });
    }
}
