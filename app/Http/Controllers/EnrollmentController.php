<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua enrollments dari setiap course yang diajarkan oleh instruktur
        $enrollments = request()->user()->instructor->courses->flatMap(function ($course) {
            return $course->enrollments;
        });


        return view('enrollments.index', [
            'enrollments' => $enrollments,
        ]);
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
    public function store(StoreEnrollmentRequest $request)
    {
        // Otorisasi manual
        $this->authorize('create', Enrollment::class); // Ini mungkin menyebabkan masalah jika policy salah

        $user = $request->user();
        $course = Course::findOrFail($request->course_id);

        Enrollment::create([
            'learner_id' => $user->learner->id,
            'course_id' => $course->id,
            'status' => 'pending',
        ]);

        return redirect('/courses/' . $request->course_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        // Validate and update the enrollment status
        $enrollment->status = $request->input('status');
        $enrollment->save();
    
        // Redirect back with a success message
        return redirect()->route('enrollments.index')->with('success', 'Enrollment status updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
