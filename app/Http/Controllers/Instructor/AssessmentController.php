<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Models\Assessment;
use App\Models\Chapter;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Chapter $chapter)
    {
        return view('instructor-views.chapters.index', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Chapter $chapter)
    {
        return view('instructor-views.assessments.create', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request, Chapter $chapter)
    {
        $validated = $request->validated();

        $chapter->assessments()->create([
            'name' => $validated['name'],
        ]);

        return redirect()->route('instructor.chapters.show', $chapter->id)->with('success', 'You have successfully created the assessment');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assessment $assessment)
    {
        return view('instructor-views.assessments.show', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assessment $assessment)
    {
        return view('instructor-views.assessments.edit', [
            'assessment' => $assessment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssessmentRequest $request, Assessment $assessment)
    {
        $validated = $request->validated();

        $assessment->update($validated);

        $assessment->save();

        return redirect()->route('instructor.chapters.show', $assessment->chapter->id)->with('You have successfully edited the assessment');
    }

/**
     * Remove the specified resource from storage.
     */
    public function destroy(Assessment $assessment)
    {
        $assessment->delete();

        return redirect()->route('instructor.instructor-dashboard');
    }
}
