<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');

        if ($response->successful()) {
            // Decode the JSON data
            $provinces = $response->json();

            // Insert the data into the database
            Province::insert($provinces);
        } else {
            // Handle the error
            $this->command->error('Failed to fetch provinces data.');
        }
    }
}
