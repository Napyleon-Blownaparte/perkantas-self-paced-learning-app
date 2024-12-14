<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_title' => $this->faker->sentence(4),
            'created_at' => $this->faker->date('Y-m-d', '+1 year'),
            'pdf_link' => $this->faker->imageUrl,
            'book_cover' => $this->faker->imageUrl(640, 480, 'education', true, 'Thumbnail'),
            'author' => $this->faker->name(),
            'descriptions' => $this->faker->paragraph(),
        ];
    }
}
