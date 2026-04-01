<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIController extends Controller
{
    public function generate(Request $request)
    {
        $prompt = $request->input('prompt');

        return response()->json([
            'result' => "Laravel AI mock response: " . $prompt
        ]);
    }
}
