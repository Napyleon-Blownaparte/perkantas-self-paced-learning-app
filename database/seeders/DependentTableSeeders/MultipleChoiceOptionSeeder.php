<?php

namespace Database\Seeders\DependentTableSeeders;

use App\Models\MultipleChoiceOption;
use App\Models\MultipleChoiceQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultipleChoiceOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $multiple_choice_questions = MultipleChoiceQuestion::all();

        foreach($multiple_choice_questions as $multiple_choice_question) {
            MultipleChoiceOption::factory(4)->create([
                'multiple_choice_question_id' => $multiple_choice_question->id,
            ]);
        }
    }
}
