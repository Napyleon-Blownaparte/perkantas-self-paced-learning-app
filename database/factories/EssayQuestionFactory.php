<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Essay_Question>
 */
class EssayQuestionFactory extends Factory
{
    protected $model = \App\Models\EssayQuestion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer_key' => $this->faker->sentence(),  // Generate a random answer key
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
