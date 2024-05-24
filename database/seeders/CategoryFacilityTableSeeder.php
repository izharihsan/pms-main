<?php

namespace Database\Seeders;

use App\Models\CategoryFacility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryFacilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Lodging', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Riad', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Single-Family Home', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Townhome', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Country House', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Apartment', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Hotel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'House', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Resort', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Inn', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Ryokan', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Love Hotel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Villa', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Motel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Aparthotel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Homestay', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Farm Stay', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Guest House', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Hostel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Capsule Hotel', 'description' => 'A place where people can stay, especially when they are on a long journey'],
            ['name' => 'Bed and Breakfast', 'description' => 'A place where people can stay, especially when they are on a long journey'],
        ];

        foreach ($data as $key => $value) {
            CategoryFacility::create($value);
        }
    }
}
