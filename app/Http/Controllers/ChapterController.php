<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Course;
use App\Http\Requests\StoreChapterRequest;
use App\Http\Requests\UpdateChapterRequest;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        $chapters = $course->chapters; // Ambil semua bab untuk kursus ini
        return view('chapters.index', compact('course', 'chapters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('chapters.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChapterRequest $request, Course $course)
    {
        $chapter = new Chapter();
        $chapter->title = $request->title;
        $chapter->course_id = $course->id; // Set ID kursus
        $chapter->save();

        return redirect()->to('/courses/' . $course->id . '/chapters/' . $chapter->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Chapter $chapter)
    {
        $courseChapters = $course->chapters;
        return view('chapters.show', [
            'course' => $course,
            'chapter' => $chapter,
            'courseChapters' => $courseChapters
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter)
    {
        return view('chapters.edit', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChapterRequest $request, Chapter $chapter)
    {
        $chapter->title = $request->title;
        $chapter->save();

        return redirect()->route('chapters.index', $chapter->course_id)->with('success', 'Chapter updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return redirect()->route('chapters.index', $chapter->course_id)->with('success', 'Chapter deleted successfully.');
    }
}
