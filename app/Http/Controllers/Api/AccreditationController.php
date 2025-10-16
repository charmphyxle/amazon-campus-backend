<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccreditationResource;
use App\Models\Accreditation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    public function index(): JsonResponse
    {
        $accreditations = Accreditation::latest()->paginate(env('PAGINATION_NUMBER'));

        return response()->json([
            'status' => 'success',
            'data' => AccreditationResource::collection($accreditations),
            'meta' => [
                'total' => $accreditations->total(),
                'current_page' => $accreditations->currentPage(),
                'last_page' => $accreditations->lastPage(),
            ]
        ]);
    }
}
