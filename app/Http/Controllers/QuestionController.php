<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Chapter;
use App\Models\Course;

class QuestionController extends Controller
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
    public function create(Course $course, Chapter $chapter)
    {
        return view('question.create-page2', [
            'course' => $course,
            'chapter' => $chapter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request, Course $course, Chapter $chapter)
    {
        // Create the question based on the type
        if ($request->questionType === 'multiple-choice') {
            // Create a multiple-choice question
            $question = new Question();
            $question->question = $request->question;
            $question->type = 'multiple-choice'; // or any field that indicates type
            $question->chapter_id = $chapter->id; // assuming questions are linked to chapters
            $question->save();

            // Save choices
            foreach ($request->choices as $index => $choice) {
                // You can store choices in a separate table, or in JSON
                $isCorrect = $request->correct_answer === 'choice' . ($index + 1); // Assuming choices are indexed as 'choice1', 'choice2', etc.
                $question->choices()->create([
                    'text' => $choice,
                    'is_correct' => $isCorrect,
                ]);
            }
        } elseif ($request->questionType === 'essay') {
            // Create an essay question
            $question = new Question();
            $question->question = $request->question;
            $question->type = 'essay'; // or any field that indicates type
            $question->essay_answer = $request->essay_answer; // Assuming you have an essay_answer column in the questions table
            $question->chapter_id = $chapter->id; // assuming questions are linked to chapters
            $question->save();
        }

        // Redirect or return response
        return redirect()->route('instructor-dashboard')->with('success', 'Question added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
