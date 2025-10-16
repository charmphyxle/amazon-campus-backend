<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(): JsonResponse
    {
        $galleries = Gallery::with('images')->latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => GalleryResource::collection($galleries),
            'meta' => [
                'total' => $galleries->total(),
                'current_page' => $galleries->currentPage(),
                'last_page' => $galleries->lastPage(),
            ]
        ]);
    }
}
