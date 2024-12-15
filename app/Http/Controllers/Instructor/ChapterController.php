<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChapterRequest;
use App\Http\Requests\UpdateChapterRequest;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        return view('instructor-views.chapters.index', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('instructor-views.chapters.create', [
            'course' => $course,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChapterRequest $request, Course $course)
    {
        $validated = $request->validated();

        $chapter = $course->chapters()->create([
            'title' => $validated['title'],
        ]);

        return redirect()->route('instructor.chapters.show', $chapter->id)->with('success', 'You have successfully created the chapter');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        return view('instructor-views.chapters.show', [
            'chapter' => $chapter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        return view('instructor-views.chapters.edit', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChapterRequest $request, Chapter $chapter)
    {
        $validated = $request->validated();

        $chapter->update($validated);

        $chapter->save();

        return redirect()->route('instructor.chapters.show', $chapter->id)->with('success', 'You have successfully edited the chapter');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return redirect()->route('instructor.instructor-dashboard');
    }
}
