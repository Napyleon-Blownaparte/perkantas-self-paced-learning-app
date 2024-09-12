<?php

namespace Database\Factories;

use App\Models\EssayQuestion;
use App\Models\MultipleChoiceQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Randomly choose the type of question
        $questionableType = $this->faker->randomElement([
            EssayQuestion::class,
            MultipleChoiceQuestion::class,
        ]);

        // Create an instance of the model using the resolved class
        $questionable = $questionableType::factory()->create();

        return [
            'questionable_type' => $questionableType, // Returns full class name
            'questionable_id' => $questionable->id,
            'question_text' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
