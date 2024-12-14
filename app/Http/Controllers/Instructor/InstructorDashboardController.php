<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class InstructorDashboardController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $courses = $user->instructor->courses;
        $books = Book::inRandomOrder()->take(8)->get();
        $learnersCount = $courses->sum(function($course) {
            return $course->learners()->count();
        });

        return view('instructor-views.instructor-dashboard', [
            'user' => $user,
            'courses' => $courses,
            'learnersCount' => $learnersCount,
            'books' => $books,
        ]);
    }
}
