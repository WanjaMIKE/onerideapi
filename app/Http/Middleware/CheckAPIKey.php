<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAPIKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('X-Api-Key'); 
        if ($apiKey !== '53a91ba5b42fd097a2a5e6f934b706ca232338abedd657a37cfd169f41df11f3') { 
            return response()->json(['message' => 'Unauthorized'], 401); 
        }
        return $next($request);
    }
}
