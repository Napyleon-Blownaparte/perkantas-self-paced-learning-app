<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Chapter;
use App\Models\Course;
use PHPUnit\Framework\Constraint\Count;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($courseId, $chapterId)
    {
        // Mendapatkan course dan chapter berdasarkan ID
        $course = Course::find($courseId);
        $chapter = Chapter::find($chapterId);

        // Pastikan chapter ditemukan
        if (!$chapter) {
            abort(404); // atau penanganan kesalahan lainnya
        }

        return view('materials.create', compact('course', 'chapter'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request, Course $course, Chapter $chapter)
    {
        // Validasi dan penyimpanan data material baru
        $material = new Material();
        $material->title = $request->input('title');
        $material->content = $request->input('content');
        $material->chapter_id = $chapter->id; // Mengaitkan dengan chapter
        // Simpan file jika ada
        if ($request->hasFile('image')) {
            $material->image = $request->file('image')->store('images', 'public');
        }
        if ($request->hasFile('video')) {
            $material->video = $request->file('video')->store('videos', 'public');
        }
        $material->save();

        // Redirect atau memberikan response
        return redirect()->to('/courses/' . $course->id . '/chapters/' . $chapter->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
