<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Multiple_Choice_Question>
 */
class MultipleChoiceQuestionFactory extends Factory
{
    protected $model = \App\Models\MultipleChoiceQuestion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'option_count' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
