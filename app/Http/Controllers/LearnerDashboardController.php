<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearnerDashboardController extends Controller
{
    public function index()
    {
       $user = request()->user();
       $enrollments = $user->learner->enrollments;
       $courses = $user->learner->courses;
       $recommendedCourses = Course::all();

       return view('learner-dashboard', [
           'user' => $user,
           'enrollments' => $enrollments,
           'courses' => $courses,
           'recommendedCourses' => $recommendedCourses
       ]);
    }
}
