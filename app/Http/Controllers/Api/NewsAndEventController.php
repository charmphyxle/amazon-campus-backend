<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsAndEventResource;
use App\Models\NewsAndEvent;
use Illuminate\Http\JsonResponse;

class NewsAndEventController extends Controller
{
    public function index(): JsonResponse
    {
        $newsAndEvents = NewsAndEvent::with('eventItems')->latest()->paginate(env('PAGINATION_NUMBER'));
        
        return response()->json([
            'status' => 'success',
            'data' => NewsAndEventResource::collection($newsAndEvents),
            'meta' => [
                'total' => $newsAndEvents->total(),
                'current_page' => $newsAndEvents->currentPage(),
                'last_page' => $newsAndEvents->lastPage(),
            ]
        ]);
    }

}
