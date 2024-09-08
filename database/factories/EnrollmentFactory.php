<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Learner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'learner_id' => Learner::factory(),
            'course_id' => Course::factory(),
            'status' => $this->faker->randomElement([
                'Pending',
                'Assigned',
                'Terminated',
                'Passed'
            ]),
        ];
    }
}
