<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VideoGalleryResource;
use App\Models\VideoGallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function index(): JsonResponse
    {
        $videoGalleries = VideoGallery::latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => VideoGalleryResource::collection($videoGalleries),
            'meta' => [
                'total' => $videoGalleries->total(),
                'current_page' => $videoGalleries->currentPage(),
                'last_page' => $videoGalleries->lastPage(),
            ]
        ]);
    }
}
