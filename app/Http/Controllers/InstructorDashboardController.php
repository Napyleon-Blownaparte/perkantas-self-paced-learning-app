<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorDashboardController extends Controller
{
    public function index()
    {
        return view('instructor-dashboard');
    }
}
