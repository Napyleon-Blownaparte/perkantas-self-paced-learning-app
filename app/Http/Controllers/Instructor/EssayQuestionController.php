<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEssay_QuestionRequest;
use App\Models\Assessment;
use App\Models\EssayQuestion;
use Illuminate\Http\Request;

class EssayQuestionController extends Controller
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
        return view('instructor-views.essay-questions.create', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEssay_QuestionRequest $request, Assessment $assessment)
    {
        $validated = $request->validated();

        $questionable = EssayQuestion::create([
            'answer_key' => $validated['answer_key'],
        ]);

        $assessment->questions()->create([
            'questionable_type' => EssayQuestion::class,
            'questionable_id' => $questionable->id,
            'question_text' => $validated['question_text'],
        ]);

        return redirect()->route('instructor.chapters.show', $assessment->chapter->id)->with('success', 'You have successfully created the essay question');
    }

    /**
     * Display the specified resource.
     */
    public function show(EssayQuestionController $essayQuestionController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EssayQuestion $essayQuestion)
    {
        return view('instructor-views.essay-questions.edit', [
            'essay_question' => $essayQuestion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEssay_QuestionRequest $request, EssayQuestion $essayQuestion)
    {
        $validated = $request->validated();

        $essayQuestion->update([
            'answer_key' => $validated['answer_key'],
        ]);

        $essayQuestion->question()->update([
            'question_text' => $validated['question_text'],
        ]);

        return redirect()->route('instructor.chapters.show', $essayQuestion->question->assessment->chapter->id)->with('You have successfully edited the essay question');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EssayQuestion $essayQuestion)
    {
        $essayQuestion->question()->delete();
        $essayQuestion->delete();

        return redirect()->back();
    }
}
