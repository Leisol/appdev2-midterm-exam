<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validToken = config('appdev2midtermexamination');

        // Checking
        $providedToken = $request->header('Authorization');
        if (!$providedToken) {
            return response()->json(['message' => 'Token is missing.'], 401);
        }

        // Comparing valid token
        if ($providedToken !== $validToken) {
            return response()->json(['message' => 'Token is invalid.'], 401);
        }
        return $next($request);
    }
}

