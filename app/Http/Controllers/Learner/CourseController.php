<?php

namespace App\Http\Controllers\Learner;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {
         $status = $request->input('status');

        // Ambil user yang login saat ini
        $user = $request->user()->learner;

        // Ambil semua enrollments milik user
        $enrollments = $user->enrollments;

         if ($status) {
             // Filter enrollments berdasarkan status
            $enrollments= $enrollments->where('status', $status);

             // Ambil semua ID course dari enrollments
             $courseIds = $enrollments->pluck('course_id');

             // Ambil courses berdasarkan ID yang sudah diambil
             $courses = Course::findMany($courseIds);

             
         } else {
             // Jika status tidak diberikan, ambil semua courses di tabel
             $courses = Course::all();
         }
            $statusMap = $courses->mapWithKeys(function ($course) use ($enrollments) {
            // Check if there's an enrollment for the course
            $enrollment = $enrollments->reverse()->firstWhere('course_id', $course->id);

            $status = match ($enrollment?->status) {
                'accepted' => 'Accepted',
                'stopped' => 'Stopped',
                'pending' => 'Pending',
                'finished' => 'Finished',
                default => 'Not Enrolled',
            };
            return [$course->id => $status];
        });

         $perPage = 8; // Jumlah item per halaman
         $currentPage = $request->input('page', 1); // Ambil halaman saat ini, default 1
         $paginatedCourses = $courses->slice(($currentPage - 1) * $perPage, $perPage);

         // Simulasi struktur pagination seperti Laravel
         $paginatedCourses = new \Illuminate\Pagination\LengthAwarePaginator(
             $paginatedCourses,
             $courses->count(),
             $perPage,
             $currentPage,
             ['path' => $request->url(), 'query' => $request->query()]
         );

         return view('learner-views.courses.index', [
            'courses' => $paginatedCourses,
            'statusMap' => $statusMap,
         ]);
     }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $randomCourses = Course::inRandomOrder()->take(8)->get();

        return view('learner-views.courses.show', [
            'course' => $course,
            'randomCourses' => $randomCourses,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
