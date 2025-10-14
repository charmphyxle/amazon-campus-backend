<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoTestimonial;
use App\Http\Requests\Admin\StoreVideoTestimonialRequest;
use App\Http\Requests\Admin\UpdateVideoTestimonialRequest;
use Illuminate\Support\Facades\Storage;

class VideoTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videoTestimonials = VideoTestimonial::latest()->paginate(10);
        return view('app.admin.video-testimonials.index', compact('videoTestimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.video-testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoTestimonialRequest $request)
    {
        $inputs = $request->validated();

        $video = $request->file('video');
        if ($video) {
            $videoName = time() . '_' . uniqid() . '.' . $video->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('video-testimonials', $video, $videoName);
            $inputs['video'] = $videoName;
        }
        VideoTestimonial::create($inputs);

        return back()->with(['success', 'Video testimonial added successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoTestimonial $videoTestimonial)
    {
        return view('app.admin.video-testimonials.edit', compact('videoTestimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoTestimonialRequest $request, VideoTestimonial $videoTestimonial)
    {
        $inputs = $request->validated();
        $video = $request->file('video');
        if ($video) {
            $videoName = time() . '_' . uniqid() . '.' . $video->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('video-testimonials', $video, $videoName);
            $inputs['video'] = $videoName;
        }
        $videoTestimonial->update($inputs);

        return back()->with(['success', 'Video testimonial updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoTestimonial $videoTestimonial)
    {
        $videoTestimonial->delete();
        return back()->with(['success', 'Video testimonial deleted successfully.']);
    }
}
