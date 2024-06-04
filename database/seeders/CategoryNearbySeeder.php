<?php

namespace Database\Seeders;

use App\Models\CategoryNearby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryNearbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Beach'],
            ['name' => 'Tourist Attraction'],
            ['name' => 'Harbor'],
            ['name' => 'Airport'],
        ];
        CategoryNearby::insert($data);
    }
}
