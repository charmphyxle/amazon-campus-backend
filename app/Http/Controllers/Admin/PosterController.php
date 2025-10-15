<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poster;
use App\Http\Requests\Admin\StorePosterRequest;
use App\Http\Requests\Admin\UpdatePosterRequest;
use Illuminate\Support\Facades\Storage;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posters = Poster::latest()->paginate(10);
        return view('app.admin.posters.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.posters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePosterRequest $request)
    {
        $inputs = $request->validated();
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('posters', $image, $imageName);
        Poster::create([
            'image' => $imageName,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poster $poster)
    {
        $poster->delete();
        return back()->with(['success' => 'Poster is deleted successfully.']);
    }
}
