<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use App\Http\Requests\Admin\StoreAccreditationRequest;
use App\Http\Requests\Admin\UpdateAccreditationRequest;
use Illuminate\Support\Facades\Storage;

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accreditations = Accreditation::latest()->paginate(10);
        return view('app.admin.accreditations.index', compact('accreditations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.accreditations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccreditationRequest $request)
    {
        $inputs = $request->validated();
        $accreditation = Accreditation::create($inputs);
        
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('accreditations', $image, $imageName);
            $accreditation->update([
                'image' => $imageName,
            ]);
        }
        return back()->with('success', 'Accreditation created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accreditation $accreditation)
    {
        return view('app.admin.accreditations.edit', compact('accreditation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccreditationRequest $request, Accreditation $accreditation)
    {
        $inputs = $request->validated();
        $accreditation->update($inputs);
        $image = $request->file('image');

        if ($image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('accreditations', $image, $imageName);
            $accreditation->update([
                'image' => $imageName,
            ]);
        }
        return back()->with('success', 'Accreditation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accreditation $accreditation)
    {
        $accreditation->delete();
        return back()->with('success', 'Accreditation deleted successfully.');
    }
}
