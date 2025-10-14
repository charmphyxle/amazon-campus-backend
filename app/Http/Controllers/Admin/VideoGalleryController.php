<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVideoGalleryRequest;
use App\Http\Requests\Admin\UpdateVideoGalleryRequest;
use App\Models\VideoGallery;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videoGalleries = VideoGallery::latest()->paginate(10);

        return view('app.admin.video-galleries.index', compact('videoGalleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.video-galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoGalleryRequest $request)
    {
        $inputs = $request->validated();
        VideoGallery::create($inputs);

        return back()->with(['success' => 'Video gallery added successfully.']);
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoGallery $videoGallery)
    {
        return view('app.admin.video-galleries.edit', compact('videoGallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoGalleryRequest $request, VideoGallery $videoGallery)
    {
        $inputs = $request->validated();
        $videoGallery->update($inputs);

        return back()->with(['success' => 'Video gallery updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGallery $videoGallery)
    {
        $videoGallery->delete();

        return back()->with(['success' => 'Video gallery deleted successfully.']);
    }
}
