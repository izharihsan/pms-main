<?php

namespace Database\Seeders;

use App\Models\CategoryFacility;
use App\Models\PropertyStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Long Stay'],
            ['name' => 'Golf'],
            ['name' => 'Spa'],
            ['name' => 'Adventure'],
            ['name' => 'Boutique'],
            ['name' => 'Airport'],
            ['name' => 'Resort'],
            ['name' => 'Shopping'],
            ['name' => 'Single'],
            ['name' => 'Luxury'],
            ['name' => 'Honeymoon'],
            ['name' => 'Backpacker'],
            ['name' => 'Historic'],
            ['name' => 'Budget'],
            ['name' => 'Pet-friendly'],
            ['name' => 'Family'],
            ['name' => 'Conference'],
            ['name' => 'Hip'],
            ['name' => 'Business'],
        ];

        $category_facilities = CategoryFacility::get();

        foreach ($category_facilities as $key => $value) {
            foreach ($data as $ckey => $cvalue) {
                PropertyStyle::create([
                    'name' => $cvalue['name'],
                    'category_facility_id' => $value->id
                ]);
            }
        }
    }
}
