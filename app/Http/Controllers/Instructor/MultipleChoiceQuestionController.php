<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMultiple_Choice_QuestionRequest;
use App\Models\Assessment;
use App\Models\MultipleChoiceOption;
use App\Models\MultipleChoiceQuestion;
use App\Models\Question;
use Illuminate\Http\Request;

class MultipleChoiceQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Assessment $assessment)
    {
        return view('instructor-views.multiple-choice-questions.create', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMultiple_Choice_QuestionRequest $request, Assessment $assessment)
    {
        $validated = $request->validated();

        $questionable = MultipleChoiceQuestion::create([
            'option_count' => 4,
        ]);

        $correctOption = $validated['correct_option'];

        $questionable->multiple_choice_options()->createMany([
            [
                'option_text' => $validated['option_1'],
                'is_true_option' => $correctOption == 1,
            ],
            [
                'option_text' => $validated['option_2'],
                'is_true_option' => $correctOption == 2,
            ],
            [
                'option_text' => $validated['option_3'],
                'is_true_option' => $correctOption == 3,
            ],
            [
                'option_text' => $validated['option_4'],
                'is_true_option' => $correctOption == 4,
            ],
        ]);

        $assessment->questions()->create([
            'questionable_type' => MultipleChoiceQuestion::class,
            'questionable_id' => $questionable->id,
            'question_text' => $validated['question_text'],
        ]);

        return redirect()->route('instructor.chapters.show', $assessment->chapter);
    }


    /**
     * Display the specified resource.
     */
    public function show(MultipleChoiceQuestion $multipleChoiceQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MultipleChoiceQuestion $multipleChoiceQuestion)
    {
        return view('instructor-views.multiple-choice-questions.edit', [
            'multiple_choice_question' => $multipleChoiceQuestion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMultiple_Choice_QuestionRequest $request, MultipleChoiceQuestion $multipleChoiceQuestion)
    {
        $validated = $request->validated();

        $multipleChoiceQuestion->update([
            'option_count' => 4,
        ]);

        $correctOption = $validated['correct_option'];

        foreach ($multipleChoiceQuestion->multiple_choice_options as $index => $option) {
            $optionIndex = $index + 1; // Karena opsi dimulai dari 1 hingga 4
            $option->update([
                'option_text' => $validated["option_{$optionIndex}"],
                'is_true_option' => $correctOption == $optionIndex,
            ]);
        }

        $multipleChoiceQuestion->question()->update([
            'question_text' => $validated['question_text'],
        ]);

        return redirect()->route('instructor.chapters.show', $multipleChoiceQuestion->question->assessment->chapter->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MultipleChoiceQuestion $multipleChoiceQuestion)
    {
        // Delete the associated questions first (optional, as cascade delete should work)
        $multipleChoiceQuestion->question()->delete();

        // Now delete the MultipleChoiceQuestion
        $multipleChoiceQuestion->delete();

        return redirect()->back();
    }

}
