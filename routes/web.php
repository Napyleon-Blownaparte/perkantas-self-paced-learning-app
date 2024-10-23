<?php

use App\Http\Controllers\InstructorDashboardController;
use App\Http\Controllers\LearnerDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/loginPage', function () {
    return view('login-page');
});

Route::get('/loginInstructor', function () {
    return view('login-instructor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/instructorDashboard', function () {
    return view('dashboardInstructor');
});


Route::get('home', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'learnerMiddleware'])->group(function() {
   Route::get('learner-dashboard', [LearnerDashboardController::class, 'index'])->name('learner-dashboard');
});

Route::middleware(['auth', 'instructorMiddleware'])->group(function() {
   Route::get('instructor-dashboard', [InstructorDashboardController::class, 'index'])->name('instructor-dashboard');
});
