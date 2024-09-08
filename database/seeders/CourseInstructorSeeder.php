<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instructor::all()->each(function ($instructor) {
            $courses = \App\Models\Course::all()->random(rand(1, 3));

            foreach ($courses as $course) {
                $instructor->courses()->attach($course->id);
            }
        });
    }
}
