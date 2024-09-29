<?php

use App\Http\Controllers\InstructorLandingPageController;
use App\Http\Controllers\LearnerLandingPageController;
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
    return view('welcome');
});

Route::get('home', [\App\Http\Controllers\LandingPageController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'learnerMiddleware'])->group(function() {
   Route::get('learner-dashboard', [LearnerLandingPageController::class, 'index'])->name('learner-dashboard');
});

Route::middleware(['auth', 'instructorMiddleware'])->group(function() {
   Route::get('instructor-dashboard', [InstructorLandingPageController::class, 'index'])->name('instructor-dashboard');
});
