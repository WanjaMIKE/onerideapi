<?php

// app/Http/Middleware/CheckAPIKey.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAPIKey
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the 'api_key' is passed in the header
        if ($request->header('api_key') !== env('API_KEY')) {
            // If the API key is missing or invalid, return a 401 response
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Proceed if the API key is correct
        return $next($request);
    }
}
