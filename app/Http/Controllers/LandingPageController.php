<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Book;


class LandingPageController extends Controller
{

    public function index()
    {
        $books = Book::inRandomOrder()->take(8)->get();
        $courses = Course::inRandomOrder()->take(8)->get();// Ini akan menampilkan data courses untuk memastikan bahwa kursus diambil dengan benar

        return view('landing-page', [
            'courses' => $courses,
            'books' => $books,
        ]);
    }

}
