<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsAndEventStoreRequest;
use App\Models\NewsAndEvent;
use Illuminate\Http\Request;

class NewsAndEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.admin.news-and-events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.news-and-events.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsAndEventStoreRequest $request)
    {
        $inputs = $request->validated();

    }

    /**
     * Display the specified resource.
     */
    public function show(NewsAndEvent $newsAndEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsAndEvent $newsAndEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsAndEvent $newsAndEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsAndEvent $newsAndEvent)
    {
        $newsAndEvent->delete();
        return back()->with('success', 'News and Event deleted successfully.');
    }
}
