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
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'start_period' => $this->faker->date(),
            'end_period' => $this->faker->date('Y-m-d', '+1 year'),
            'estimated_time' => $this->faker->numberBetween(5, 100),
            'thumbnail_image' => $this->faker->imageUrl(640, 480, 'education', true, 'Thumbnail'),
            'banner_image' => $this->faker->imageUrl(1200, 400, 'education', true, 'Banner'),
        ];
    }
}
