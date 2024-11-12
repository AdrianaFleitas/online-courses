<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Introduction to Laravel',
            'description' => 'Learn the basics of Laravel, a popular PHP framework.',
            'instructor' => 'John Doe',
            'duration' => 120,
            'category_id' => 1,
            'link' =>'https://www.youtube.com/watch?v=eUNWzJUvkCA',
            'age_group_id' => 1
        ]);

        Course::create([
            'title' => 'Advanced Laravel',
            'description' => 'Deep dive into advanced Laravel topics and best practices.',
            'instructor' => 'Jane Smith',
            'duration' => 120,
            'category_id' => 1,
            'link' =>'https://www.youtube.com/watch?v=dpJDV25tptw',
            'age_group_id' => 2
        ]);

        Course::create([
            'title' => 'Designing User Interfaces and Experiences (UI/UX)',
            'description' => 'Explain design, UI/UX concepts, best practices of visual development, and the key duties and responsibilities of a UI/UX designer.',
            'instructor' => 'Corey Leong',
            'duration' => 240,
            'category_id' => 2,
            'link' =>'https://www.youtube.com/watch?v=c9Wg6Cb_YlU',
            'age_group_id' => 3
        ]);
    }
}
