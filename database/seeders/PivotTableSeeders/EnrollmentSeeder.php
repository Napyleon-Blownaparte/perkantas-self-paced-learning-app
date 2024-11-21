<?php

namespace Database\Seeders\PivotTableSeeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Learner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $learners = Learner::all(); // Get all learners
        $allCourseIds = Course::pluck('id')->toArray(); // Get all instructor IDs


        foreach ($learners as $learner) {
            // Ensure there are at least 1 instructor available to randomize
            $numberOfCourses = min(rand(1, 3), count($allCourseIds));
            $someCourseIds = Arr::random($allCourseIds, $numberOfCourses);

            // Prepare the transformed instructor IDs with additional attributes for the pivot table
            $transformedCourseIds = [];

            foreach ($someCourseIds as $id) {
                $transformedCourseIds[$id] = [
                    'status' => Arr::random(['accepted', 'pending', 'rejected', 'finished', 'stopped']), // Example status
                    'created_at' => now(), // Add timestamps
                    'updated_at' => now(), // Add timestamps
                ];
            }

            // Attach the transformed instructors with extra pivot data
            $learner->courses()->attach($transformedCourseIds);
        }
    }
}
