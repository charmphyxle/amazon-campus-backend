<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(): JsonResponse
    {
        $testimonials = Testimonial::latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => TestimonialResource::collection($testimonials),
            'meta' => [
                'total' => $testimonials->total(),
                'current_page' => $testimonials->currentPage(),
                'last_page' => $testimonials->lastPage(),
            ]
        ]);
    }
}
