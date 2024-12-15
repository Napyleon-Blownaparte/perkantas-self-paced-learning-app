<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\CourseInstructor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->input('status');
        $user = $request->user();

        if ($status === 'instructor') {
            $courses = $user->instructor->courses;
        } else {
            // Menampilkan semua kursus jika tidak ada filter
            $courses = Course::all();
        }

        $perPage = 8; // Jumlah item per halaman
        $currentPage = $request->input('page', 1); // Ambil halaman saat ini, default 1
        $paginatedCourses = $courses->slice(($currentPage - 1) * $perPage, $perPage);

        // Simulasi struktur pagination seperti Laravel
        $paginatedCourses = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedCourses,
            $courses->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('instructor-views.courses.index', [
            'courses' => $paginatedCourses,
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

        $thumbnail_image_path = $request->hasFile('thumbnail_image')
        ? $request->file('thumbnail_image')->store('/courses/thumbnail_images', 'public')
        : 'images/placeholder.svg'; 

        $banner_image_path = $request->hasFile('banner_image')
        ? $request->file('banner_image')->store('/courses/banner_images', 'public')
        : 'images/placeholder.svg';

        $course = Course::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start_period' => $validated['start_period'],
            'end_period' => $validated['end_period'],
            'estimated_time' => $validated['estimated_time'],
            'thumbnail_image' => $thumbnail_image_path,
            'banner_image' => $banner_image_path,
        ]);

        CourseInstructor::create([
            'instructor_id' => $request->user()->instructor->id,
            'course_id' => $course->id,
        ]);

        return redirect()->route('instructor.courses.index', ['status' => 'instructor'])->with('success', 'You have successfully created the course');
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

        return redirect()->route('instructor.courses.show', $course->id)->with('success', 'You have successfully edited the course');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('instructor.courses.show', $course->id);
    }
}
