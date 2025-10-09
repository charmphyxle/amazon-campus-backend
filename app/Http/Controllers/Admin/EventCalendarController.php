<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventCalendar;
use App\Http\Requests\Admin\StoreEventCalendarRequest;
use App\Http\Requests\Admin\UpdateEventCalendarRequest;

class EventCalendarController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventCalendarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventCalendarRequest $request, EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventCalendar $eventCalendar)
    {
        //
    }
}
