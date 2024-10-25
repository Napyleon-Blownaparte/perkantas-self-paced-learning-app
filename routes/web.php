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
Route::view('/fredrik', 'fredrik.chapter.create');



Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index']);
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

// Chapter
Route::get('/courses/{course}/chapters/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');

Route::middleware(['auth', 'learnerMiddleware'])->group(function() {
    // Dashboard
   Route::get('/learner-dashboard', [LearnerDashboardController::class, 'index'])->name('learner-dashboard');

   // Enrollment
   Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');

   // Chapter
   Route::get('/chapters', [ChapterController::class, 'show'])->name('chapters.show');


});

Route::middleware(['auth', 'instructorMiddleware'])->group(function() {
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    // Dashboard
   Route::get('/instructor-dashboard', [InstructorDashboardController::class, 'index'])->name('instructor-dashboard');

   // Course

   Route::get('/myCourses', [CourseController::class, 'indexInstructedCourses'])->name('courses.indexInstructedCourse');
   Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
//    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
   Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
   Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
   Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

   // Enrollment
   Route::get('/enrollments', [EnrollmentController::class, 'index'])->name('enrollments.index');
   Route::get('/enrollments/{enrollment}/edit', [EnrollmentController::class, 'edit'])->name('enrollments.edit');
   Route::put('/enrollments/{enrollment}', [EnrollmentController::class, 'update'])->name('enrollments.update');

   // Chapter
    Route::get('/courses/{course}/chapters', [ChapterController::class, 'index'])->name('chapters.index');
    Route::get('/courses/{course}/chapters/create', [ChapterController::class, 'create'])->name('chapters.create');
    Route::post('courses/{course}/chapters', [ChapterController::class, 'store'])->name('chapters.store');

    Route::get('/courses/{course}/chapters/{chapter}/edit', [ChapterController::class, 'edit'])->name('chapters.edit');
    Route::put('/courses/{course}/chapters/{chapter}', [ChapterController::class, 'update'])->name('chapters.update');
    Route::delete('/courses/{course}/chapters/{chapter}', [ChapterController::class, 'destroy'])->name('chapters.destroy');

   // Material
   Route::get('/courses/{course}/chapters/{chapters}/materials', [MaterialController::class, 'index'])->name('materials.index');
   Route::get('/courses/{course}/chapters/{chapters}/materials/create', [MaterialController::class, 'create'])->name('materials.create');
   Route::post('/courses/{course}/chapters/{chapter}/materials', [MaterialController::class, 'store'])->name('materials.store');
   Route::get('/courses/{course}/chapters/{chapters}/materials/{material}', [MaterialController::class, 'show'])->name('materials.show');
   Route::get('/courses/{course}/chapters/{chapters}/materials/{material}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
   Route::put('/courses/{course}/chapters/{chapters}/materials/{material}', [MaterialController::class, 'update'])->name('materials.update');
   Route::delete('/courses/{course}/chapters/{chapters}/materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');

   // Question
//    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
   Route::get('/courses/{course}/chapters/{chapters}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
   Route::post('/courses/{course}/chapters/{chapters}/questions', [QuestionController::class, 'store'])->name('questions.store');
//    Route::get('/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
//    Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
//    Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');
//    Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
});
