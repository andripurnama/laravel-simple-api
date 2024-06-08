<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionRequest;
use App\Jobs\SubmissionStore;
use Illuminate\Http\JsonResponse;

class SubmissionController extends Controller
{
    public function submit(SubmissionRequest $request): JsonResponse
    {
        $data = $request->only(['name', 'email', 'message']);
        SubmissionStore::dispatch($data);
        return response()->json(['success' => true, 'message' => 'Submission has been submitted successfully'], 201);
    }
}
