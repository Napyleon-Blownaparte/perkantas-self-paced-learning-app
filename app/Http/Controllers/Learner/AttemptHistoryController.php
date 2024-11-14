<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttempt_HistoryRequest;
use App\Models\Assessment;
use App\Models\AttemptHistory;
use App\Models\LearnersAnswer;
use App\Models\Question;
use Illuminate\Http\Request;

class AttemptHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttempt_HistoryRequest $request, Assessment $assessment)
    {
        $validatedData = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'nullable|string', // Bisa null untuk jawaban kosong
        ]);

        $attemptHistory = AttemptHistory::create([
            'assessment_id' => $assessment->id,
            'learner_id' => $request->user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach ($validatedData['answers'] as $questionId => $answer) {
            $question = Question::find($questionId);

            if (!$question) {
                continue;
            }

            $essayAnswer = $question->questionable_type === 'App\Models\EssayQuestion' ? $answer : null;
            $multipleChoiceAnswer = $question->questionable_type === 'App\Models\MultipleChoiceQuestion' ? $answer : null;

            LearnersAnswer::create([
                'attempt_history_id' => $attemptHistory->id,
                'question_id' => $questionId,
                'essay_answer' => $essayAnswer,
                'multiple_choice_answer' => $multipleChoiceAnswer,
            ]);
        }

        return redirect()->route('instructor.instructor-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
