<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsAndEventStoreRequest;
use App\Http\Requests\Admin\StoreEventItemRequest;
use App\Http\Requests\Admin\UpdateNewsAndEventRequest;
use App\Models\EventItem;
use App\Models\NewsAndEvent;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Storage;

class NewsAndEventController extends Controller
{
    /**
     * Store event items.
     */
    public function addEventItem(StoreEventItemRequest $request, NewsAndEvent $newsAndEvent)
    {

        $inputs = $request->validated();
        $inputs['admin_id'] = 1;
        $inputs['news_and_event_id'] =  $newsAndEvent->id;

        EventItem::create([
            'news_and_event_id' => $inputs['news_and_event_id'],
            'admin_id' => $inputs['admin_id'],
            'time' => $inputs['time'],
            'content' => $inputs['content'],
        ]);
        return back()->with('success', 'Event item added successfully.');
    }

    /**
     * Delete event items.
     */
    public function deleteEventItem(EventItem $eventItem)
    {        
        $eventItem->delete();
        return back()->with('success', 'Event item deleted successfully.');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsAndEvents = NewsAndEvent::latest()->paginate(5);
        return view('app.admin.news-and-events.index', compact('newsAndEvents'));
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

        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('news-and-events', $image, $imageName);
            $inputs['image'] = $imageName;
        }
        NewsAndEvent::create($inputs);
        return back()->with('success', 'News and Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsAndEvent $newsAndEvent)
    {
        return view('app.admin.news-and-events.show', compact('newsAndEvent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsAndEvent $newsAndEvent)
    {
        return view('app.admin.news-and-events.edit', compact('newsAndEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsAndEventRequest $request, NewsAndEvent $newsAndEvent)
    {
        $inputs = $request->validated();

        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('news-and-events', $image, $imageName);
            $inputs['image'] = $imageName;
        }
        $newsAndEvent->update($inputs);
        return back()->with('success', 'News and Event updated successfully.');
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
