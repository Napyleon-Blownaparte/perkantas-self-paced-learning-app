<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorDashboardController;
use App\Http\Controllers\LearnerDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\QuestionController;
use App\Models\AttemptHistory;
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

// TEST
Route::view('/kiko', 'dashboardInstructor');



Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('home');
Route::get('/home', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Course
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::middleware(['auth', 'learnerMiddleware'])->group(function() {
    // Dashboard
   Route::get('/learner-dashboard', [LearnerDashboardController::class, 'index'])->name('learner-dashboard');

   // Enrollment
   Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');

   // Chapter
   Route::get('/chapters', [ChapterController::class, 'show'])->name('chapters.show');


});

Route::middleware(['auth', 'instructorMiddleware'])->group(function() {
    // Dashboard
   Route::get('/instructor-dashboard', [InstructorDashboardController::class, 'index'])->name('instructor-dashboard');

   // Course
   Route::get('/courses', [CourseController::class, 'indexInstructedCourse'])->name('courses.indexInstructedCourse');
   Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
   Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
//    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
   Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
   Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
   Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

   // Enrollment
   Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index');
   Route::get('/enrollments/{enrollment}/edit', [EnrollmentController::class, 'edit'])->name('enrollment.edit');
   Route::put('/enrollments/{enrollment}', [EnrollmentController::class, 'update'])->name('enrollment.update');

   // Chapter
   Route::get('/chapters', [ChapterController::class, 'index'])->name('chapters.index');
   Route::get('/chapters/create', [ChapterController::class, 'create'])->name('chapters.create');
   Route::post('/chapters', [ChapterController::class, 'store'])->name('chapters.store');
   Route::get('/chapters/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');
   Route::get('/chapters/{chapter}/edit', [ChapterController::class, 'edit'])->name('chapters.edit');
   Route::put('/chapters/{chapter}', [ChapterController::class, 'update'])->name('chapters.update');
   Route::delete('/chapters/{chapter}', [ChapterController::class, 'destroy'])->name('chapters.destroy');

   // Material
   Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
   Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
   Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');
   Route::get('/materials/{material}', [MaterialController::class, 'show'])->name('materials.show');
   Route::get('/materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
   Route::put('/materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
   Route::delete('/materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');

   // Question
   Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
   Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
   Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
   Route::get('/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
   Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
   Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
   Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
});
