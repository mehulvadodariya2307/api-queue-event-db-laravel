<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\ProcessSubmission;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(SubmissionRequest $request): JsonResponse
    {
        // Queue the job to process the submission
        ProcessSubmission::dispatch($request->validated());

        return response()->json(['message' => 'Submission received.']);
    }
}
