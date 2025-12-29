<?php

namespace Laravel\SimpleUploader\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json([
                'error' => 'No file uploaded'
            ], 422);
        }

        $path = $request->file('file')->store('uploads', 'public');

        return response()->json([
            'path' => $path,
            'url'  => Storage::url($path)
        ]);
    }
}
