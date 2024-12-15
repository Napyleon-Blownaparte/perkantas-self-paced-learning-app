<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Book;
use Illuminate\Http\Request;

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

        $acceptedCourseIds = $enrollments->where('status', 'accepted')->pluck('course_id');
        $acceptedCourses = Course::whereIn('id', $acceptedCourseIds)->get();

        $pendingCourseIds = $enrollments->where('status', 'pending')->pluck('course_id');
        $pendingCourses = Course::whereIn('id', $pendingCourseIds)->get();

        $randomCourses = Course::inRandomOrder()->take(8)->get();
        $books = Book::inRandomOrder()->take(8)->get();

        return view('learner-views.learner-dashboard', [
            'user' => $user,
            'enrollments' => $enrollments,
            'courses' => $courses,
            'recommendedCourses' => $recommendedCourses,
            'finishedCoursesCount' => $finishedCoursesCount,
            'acceptedCoursesCount' => $acceptedCoursesCount,
            'pendingCoursesCount' => $pendingCoursesCount,
            'acceptedCourses' => $acceptedCourses,
            'pendingCourses' => $pendingCourses,
            'randomCourses' => $randomCourses,
            'books' => $books,
        ]);
    }
}
