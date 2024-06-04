<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        District::all()->each(function ($district) {
            $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/villages/' . $district->id . '.json');
            if ($response->successful()) {
                $village = $response->json();
                $district->village()->createMany($village);
            }
        });
    }
}
