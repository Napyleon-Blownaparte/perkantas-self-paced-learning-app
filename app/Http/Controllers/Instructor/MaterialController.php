<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Chapter;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Chapter $chapter)
    {
        return view('instructor-views.materials.index', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Chapter $chapter)
    {
        return view('instructor-views.materials.create', [
            'chapter' => $chapter,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request, Chapter $chapter)
    {
        $validated = $request->validated();

        $video_path = null;
        $image_path = null;

        if ($request->has('video')) {
            $video_path = $validated['video'];
        }
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('/materials/images', 'public');
        }

        $chapter->materials()->create([
            'title' => $validated['title'],
            'video' => $video_path,
            'image' => $image_path,
            'content' => $validated['content'],
        ]);

        return redirect()->route('instructor.chapters.show', $chapter->id)->with('success', 'You have successfully created the material');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('instructor-views.materials.show', [
            'material' => $material,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('instructor-views.materials.edit', [
            'material' => $material,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        $validated = $request->validated();

        $material->update($validated);

        if ($request->hasFile('video')) {
            $material->video = $request->file('video')->store('/materials/videos', 'public');
        }
        if ($request->hasFile('image')) {
            $material->image = $request->file('image')->store('/materials/images', 'public');
        }

        $material->save();

        return redirect()->route('instructor.chapters.show', $material->chapter->id)->with('success', 'You have successfully edited the material');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('instructor.chapters.show', $material->chapter->id)->with('success', 'You have successfully deleted the material');
    }
}
