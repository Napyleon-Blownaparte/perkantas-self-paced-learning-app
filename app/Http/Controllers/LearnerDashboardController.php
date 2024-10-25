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
        $recommendedCourses = Course::take(3)->get();
        $finishedCoursesCount = $enrollments->where('status', 'finished')->count();
        $acceptedCoursesCount = $enrollments->where('status', 'accepted')->count();
        $pendingCoursesCount = $enrollments->where('status', 'pending')->count();

        // Mengambil Course yang diterima
$acceptedCourseIds = $enrollments->where('status', 'enrolled')->pluck('course_id');
$acceptedCourses = Course::whereIn('id', $acceptedCourseIds)->get();

// Mengambil Course yang tertunda
$pendingCourseIds = $enrollments->where('status', 'pending')->pluck('course_id');
$pendingCourses = Course::whereIn('id', $pendingCourseIds)->get();


        return view('learner-dashboard', [
            'user' => $user,
            'enrollments' => $enrollments,
            'courses' => $courses,
            'recommendedCourses' => $recommendedCourses,
            'finishedCoursesCount' => $finishedCoursesCount,
            'acceptedCoursesCount' => $acceptedCoursesCount,
            'pendingCoursesCount' => $pendingCoursesCount,
            'acceptedCourses' => $acceptedCourses,
            'pendingCourses' => $pendingCourses,
        ]);
    }

}
