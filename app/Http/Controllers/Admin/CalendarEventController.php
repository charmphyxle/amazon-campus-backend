<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalendarEvent;
use App\Http\Requests\Admin\StoreCalendarEventRequest;
use App\Http\Requests\Admin\UpdateCalendarEventRequest;

class CalendarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calendarEvents = CalendarEvent::latest()->paginate(env('PAGINATION_NUMBER'));
        return view('app.admin.calendar-events.index', compact('calendarEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.admin.calendar-events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCalendarEventRequest $request)
    {
        $inputs = $request->validated();
        CalendarEvent::create($inputs);
        return back()->with('success', 'Calendar event created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalendarEvent $calendarEvent)
    {
        return view('app.admin.calendar-events.edit', compact('calendarEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalendarEventRequest $request, CalendarEvent $calendarEvent)
    {
        $inputs = $request->validated();
        $calendarEvent->update($inputs);
        return back()->with('success', 'Calendar event created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalendarEvent $calendarEvent)
    {
        $calendarEvent->delete();
        return back()->with('success', 'Calendar event deleted successfully.');
    }
}
