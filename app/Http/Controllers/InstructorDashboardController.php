<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorLandingPageController extends Controller
{
    public function index()
    {
        return view('instructor-dashboard');
    }
}
