<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Learner;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Learner::all()->each(function ($learner) {
            $courses = \App\Models\Course::all()->random(rand(1, 6));

            foreach ($courses as $course) {
                $learner->courses()->attach($course->id, [
                    'status' => Factory::create()->randomElement([
                        'Pending',
                        'Assigned',
                        'Terminated',
                        'Passed'
                    ])
                ]);
            }
        });
    }
}
