<?php

namespace Database\Seeders\PivotTableSeeders;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CourseInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = Instructor::all(); // Get all learners
        $allCourseIds = Course::pluck('id')->toArray(); // Get all instructor IDs


        foreach ($instructors as $instructor) {
            // Ensure there are at least 1 instructor available to randomize
            $numberOfCourses = min(rand(1, 2), count($allCourseIds));
            $someCourseIds = Arr::random($allCourseIds, $numberOfCourses);

            // Prepare the transformed instructor IDs with additional attributes for the pivot table
            $transformedCourseIds = [];

            foreach ($someCourseIds as $id) {
                $transformedCourseIds[$id] = [
                    'created_at' => now(), // Add timestamps
                    'updated_at' => now(), // Add timestamps
                ];
            }

            // Attach the transformed instructors with extra pivot data
            $instructor->courses()->attach($transformedCourseIds);
        }
    }
}
