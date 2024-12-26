<?php

namespace App\Http\Controllers\Learner;

use App\Notifications\EnrollmentNotification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request, Course $course)
    {
        $enrollment = Enrollment::create([
            'learner_id' => Auth::user()->learner->id,
            'course_id' => $course->id,
            'status' => 'pending',
        ]);
        
        $instructors = $enrollment->course->instructors;
        foreach ($instructors as $instructor) {
            if ($instructor->user) {
                $instructor->user->notify(new EnrollmentNotification($enrollment));
            }
        }

        return redirect()->route('learner.courses.show', $course->id)->with('success', 'You have successfully enrolled in the course');;
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
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
