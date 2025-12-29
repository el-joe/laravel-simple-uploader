<?php

use Illuminate\Support\Facades\Route;
use Laravel\SimpleUploader\Http\Controllers\UploadController;

Route::post('/simple-upload', [UploadController::class, 'upload']);
