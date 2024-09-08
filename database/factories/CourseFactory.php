<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'period' => $this->faker->numberBetween(1, 3),
            'estimated_time' => $this->faker->numberBetween(30, 60),
            'number_of_chapters' => $this->faker->numberBetween(1, 10),
            'course_activity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
