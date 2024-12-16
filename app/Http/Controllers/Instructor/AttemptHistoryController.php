<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\AttemptHistory;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class AttemptHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Enrollment $enrollment, Assessment $assessment)
    {
        return view('instructor-views.attempt-histories.index', [
            'enrollment' => $enrollment,
            'learner' => $enrollment->learner_id,
            'assessment' => $assessment
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AttemptHistory $attemptHistory)
    {
        return view('instructor-views.attempt-histories.show', [
            'attempt_history' => $attemptHistory
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttemptHistory $attemptHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AttemptHistory $attemptHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttemptHistory $attemptHistory)
    {
        //
    }
}
