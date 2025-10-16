<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PosterResource;
use App\Models\Poster;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PosterController extends Controller
{
     public function index(): JsonResponse
    {
        $posters = Poster::latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => PosterResource::collection($posters),
            'meta' => [
                'total' => $posters->total(),
                'current_page' => $posters->currentPage(),
                'last_page' => $posters->lastPage(),
            ]
        ]);
    }
}
