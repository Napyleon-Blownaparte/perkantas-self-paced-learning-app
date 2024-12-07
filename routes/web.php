<?php

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

// TEST



Route::get('/', [\App\Http\Controllers\LandingPageController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('home');

// Route::group([
//     'prefix' => 'learner',
//     'middleware' => 'learnerMiddleware',
//     'as' => 'learner.',
// ], function() {

// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// L E A R N E R


// I N S T R U C T O R

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'instructor',
        'middleware' => 'instructorMiddleware',
        'as' => 'instructor.'
    ], function () {
        Route::get('instructor-dashboard', [App\Http\Controllers\Instructor\InstructorDashboardController::class, 'index'])->name('instructor-dashboard');
        Route::resource('courses', App\Http\Controllers\Instructor\CourseController::class);
        Route::resource('courses.chapters', App\Http\Controllers\Instructor\ChapterController::class)->shallow();
        Route::resource('chapters.materials', App\Http\Controllers\Instructor\MaterialController::class)->shallow();
        Route::resource('chapters.assessments', App\Http\Controllers\Instructor\AssessmentController::class)->shallow();
        Route::resource('assessments.multiple-choice-questions', App\Http\Controllers\Instructor\MultipleChoiceQuestionController::class)->shallow();
        Route::resource('assessments.essay-questions', App\Http\Controllers\Instructor\EssayQuestionController::class)->shallow();
        Route::resource('enrollments', App\Http\Controllers\Instructor\EnrollmentController::class)->shallow();
    });

    Route::group([
        'prefix' => 'learner',
        'middleware' => 'learnerMiddleware',
        'as' => 'learner.'
    ], function () {
        Route::get('learner-dashboard', [App\Http\Controllers\Learner\LearnerDashboardController::class, 'index'])->name('learner-dashboard');
        Route::resource('courses', App\Http\Controllers\Learner\CourseController::class)->shallow()->only(['index', 'show']);
        Route::resource('assessments.attempt-histories', App\Http\Controllers\Learner\AttemptHistoryController::class)->shallow()->only('index', 'store');
        Route::resource('instructors', App\Http\Controllers\Learner\InstructorController::class)->shallow()->only(['show']);
        Route::resource('courses.enrollments', App\Http\Controllers\Learner\EnrollmentController::class)->shallow()->only(['store']);
        Route::resource('courses.chapters', App\Http\Controllers\Learner\ChapterController::class)->shallow()->only(['show']);
        // Route::resource('courses.assessments', App\Http\Controllers\Learner\AssessmentController::class)->shallow()->only(['show']);

    });
});




require __DIR__.'/auth.php';


