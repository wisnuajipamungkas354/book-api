<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsViewer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role !== 'viewer') {
            return $next($request);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Maaf, Kamu tidak memiliki akses untuk mengakses api ini!',
            ], 401);
        }
    }
}
