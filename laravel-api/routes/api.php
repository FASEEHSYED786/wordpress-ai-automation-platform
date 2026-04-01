<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;

Route::post('/generate', [AIController::class, 'generate']);
