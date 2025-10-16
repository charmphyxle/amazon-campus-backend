<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CalendarEventResource;
use App\Models\CalendarEvent;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CalendarEventController extends Controller
{
     public function index(): JsonResponse
    {
        $calendarEvents = CalendarEvent::latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => CalendarEventResource::collection($calendarEvents),
            'meta' => [
                'total' => $calendarEvents->total(),
                'current_page' => $calendarEvents->currentPage(),
                'last_page' => $calendarEvents->lastPage(),
            ]
        ]);
    }
}
