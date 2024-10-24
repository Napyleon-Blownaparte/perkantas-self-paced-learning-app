<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCourses = Course::all();
        return view('course.index', [
            'courses' => $allCourses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // if (Gate::denies('view', $course)) {
        //     // Redirect atau abort jika akses ditolak
        //     return redirect()->route('courses.index')->with('error', 'Unauthorized access.');
        // }
        // $recommendedCourses = Course::where('id', '!=', $course->id)
        //                         ->inRandomOrder()
        //                         ->limit(5)
        //                         ->get();


        return view('courses.show', [
            'course' => $course,
            // 'recommendedCourses' => $recommendedCourses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
