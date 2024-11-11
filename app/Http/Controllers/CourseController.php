<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexInstructedCourses()
    {
        $myCourses = request()->user()->instructor->courses;

        return view('courses.index', [
            'courses' => $myCourses,
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCourses = Course::all();
        return view('courses.index', [
            'courses' => $allCourses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create'); // Return the create view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $validatedData = $request->validated();

        // Handle file uploads (images)
        $thumbnailPath = $request->file('thumbnail_image')->store('thumbnails', 'public');
        $bannerPath = $request->file('banner_image')->store('banners', 'public');

        // Create a new course
        Course::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'start_period' => $validatedData['start_period'],
            'end_period' => $validatedData['end_period'],
            'estimated_time' => $validatedData['estimated_time'],
            'thumbnail_image' => $thumbnailPath,
            'banner_image' => $bannerPath,
        ]);

        // Redirect back with a success message
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', [
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validatedData = $request->validated();

        // Update the course details
        $course->update($validatedData);

        // Handle file uploads if provided
        if ($request->hasFile('thumbnail_image')) {
            $course->thumbnail_image = $request->file('thumbnail_image')->store('thumbnails', 'public');
        }
        if ($request->hasFile('banner_image')) {
            $course->banner_image = $request->file('banner_image')->store('banners', 'public');
        }

        $course->save();

        // Redirect back with a success message
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete(); // Delete the course

        // Redirect back with a success message
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
