<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VideoTestimonialResource;
use App\Models\VideoTestimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoTestimonialController extends Controller
{
    public function index(): JsonResponse
    {
        $videoTestimonials = VideoTestimonial::latest()->paginate(env('PAGINATION_NUMBER'));

        return response()->json([
            'status' => 'success',
            'data' => VideoTestimonialResource::collection($videoTestimonials),
            'meta' => [
                'total' => $videoTestimonials->total(),
                'current_page' => $videoTestimonials->currentPage(),
                'last_page' => $videoTestimonials->lastPage(),
            ]
        ]);
    }
}
