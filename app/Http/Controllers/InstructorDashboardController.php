<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorDashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $courses = $user->instructor->courses;
        $learnersCount = $courses->sum(function($course) {
            return $course->learners()->count();
        });

        return view('instructor-dashboard', [
            'user' => $user,
            'courses' => $courses,
            'learnersCount' => $learnersCount
        ]);
    }
}
