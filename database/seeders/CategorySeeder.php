<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Programming',
            'description' => 'Learn best practices for programming.',
        ]);

        Category::create([
            'name' => 'UI/UX',
            'description' => 'UI/UX concepts and front-end & backend tools, frameworks, and languages such as HTML, CSS, and JavaScript',
        ]);
    }
}

