<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnerLandingPageController extends Controller
{
    public function index()
    {
        return view('learner-dashboard');
    }
}
