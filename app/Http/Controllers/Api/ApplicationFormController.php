<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreApplicationFormRequest;
use App\Http\Resources\ApplicationFormResource;
use App\Models\ApplicationForm;

class ApplicationFormController extends Controller
{
    public function store(StoreApplicationFormRequest $request)
    {
        $inputs = $request->validated();
        $applicationForm = ApplicationForm::create($inputs);

        return response()->json([
            'status' => 'success',
            'message' => 'Application form created successfully',
            'data' => new ApplicationFormResource($applicationForm),
        ], 201);

    }
}
