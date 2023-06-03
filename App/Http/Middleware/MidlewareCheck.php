<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MidlewareCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    function __construct()
    {
        if (auth()->guard('petugas')->check()) {
            redirect('/login')->with('pesan', 'Anda tidak boleh mengakses halaman ini');
        }
    }
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}