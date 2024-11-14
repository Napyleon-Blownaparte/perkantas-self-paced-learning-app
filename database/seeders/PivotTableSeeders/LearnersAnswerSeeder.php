<?php

namespace Database\Seeders\PivotTableSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AttemptHistory;
use App\Models\Question;
use App\Models\MultipleChoiceQuestion;
use App\Models\EssayQuestion;
use Illuminate\Support\Arr;

class LearnersAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attemptHistories = AttemptHistory::all();
        $allQuestionIds = Question::pluck('id')->toArray();

        foreach ($attemptHistories as $attemptHistory) {
            $numberOfQuestions = min(rand(3, 9), count($allQuestionIds));
            $someQuestionIds = Arr::random($allQuestionIds, $numberOfQuestions);

            foreach ($someQuestionIds as $questionId) {
                $question = Question::find($questionId);

                $answerData = [
                    'essay_answer' => '',
                    'multiple_choice_answer' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Check if the question is a MultipleChoiceQuestion or EssayQuestion
                if ($question instanceof MultipleChoiceQuestion) {
                    // If it's a multiple choice question, fill in the multiple_choice_answer field
                    $answerData['multiple_choice_answer'] = $this->generateRandomMultipleChoiceAnswer($question);
                } elseif ($question instanceof EssayQuestion) {
                    // If it's an essay question, fill in the essay_answer field
                    $answerData['essay_answer'] = $this->generateRandomEssayAnswer();
                }

                // Associate the attempt history with the question, providing the appropriate answers
                $attemptHistory->questions()->attach($questionId, $answerData);
            }
        }
    }

    /**
     * Generate a random response for a multiple choice question.
     */
    private function generateRandomMultipleChoiceAnswer(MultipleChoiceQuestion $question): string
    {
        // Assuming the question has options stored, we can randomly pick one
        $choices = $question->choices; // Assuming 'choices' holds the options in the model
        return Arr::random($choices);
    }

    /**
     * Generate a random response for an essay question.
     */
    private function generateRandomEssayAnswer(): string
    {
        $sampleEssays = [
            'This is a well-thought-out essay answer.',
            'The essay provides a detailed explanation on the subject.',
            'A concise and accurate answer to the essay question.',
            'The response thoroughly covers the required points.'
        ];

        return Arr::random($sampleEssays);
    }
}
