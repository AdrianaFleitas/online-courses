<?php

namespace Database\Seeders;

use App\Models\AgeGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgeGroup::create([
            'description' => '5-8',
            'start_age' => 5,
            'end_age' => 8,
        ]);
        AgeGroup::create([
            'description' => '9-13',
            'start_age' => 9,
            'end_age' => 13,
        ]);
        AgeGroup::create([
            'description' => '14-16',
            'start_age' => 14,
            'end_age' => 16,
        ]);
        AgeGroup::create([
            'description' => '16+',
            'start_age' => 16,
            'end_age' => null,
        ]);
    }
}
