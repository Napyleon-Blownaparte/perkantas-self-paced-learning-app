<?php

namespace Database\Seeders\DependentTableSeeders;

use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::all();

        foreach($courses as $course){
            Chapter::factory(rand(1, 6))->create([
                'course_id' => $course->id,
            ]);
        }
    }
}
