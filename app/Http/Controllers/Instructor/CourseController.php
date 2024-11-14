<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        return view('instructor-views.courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructor-views.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validated = $request->validated();

        $thumbnail_image_path = $request->file('thumbnail_image')->store('/courses/thumbnail_images', 'public');
        $banner_image_path = $request->file('banner_image')->store('/courses/banner_images', 'public');

        Course::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start_period' => $validated['start_period'],
            'end_period' => $validated['end_period'],
            'estimated_time' => $validated['estimated_time'],
            'thumbnail_image' => $thumbnail_image_path,
            'banner_image' => $banner_image_path,
        ]);

        return redirect()->route('instructor.instructor-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('instructor-views.courses.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('instructor-views.courses.edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validated = $request->validated();

        $course->update($validated);

        if ($request->hasFile('thumbnail_image')) {
            $course->thumbnail_image = $request->file('thumbnail_image')->store('/courses/thumbnail_images', 'public');
        }
        if ($request->hasFile('banner_image')) {
            $course->banner_image = $request->file('banner_image')->store('/courses/banner_images', 'public');
        }

        $course->save();

        return redirect()->route('instructor.instructor-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('instructor.instructor-dashboard');
    }
}
