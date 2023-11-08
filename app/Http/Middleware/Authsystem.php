<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authsystem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $allowedIPs = [
        // '192.168.1.100',
        // '192.168.1.0/24',
        '127.0.0.1',
    ];
    public function handle(Request $request, Closure $next): Response
    {
        $clientIp = $request->ip();
        // echo $clientIp;
        if (!in_array($clientIp, $this->allowedIPs)) {
            return response()->view('404', [], 404);
        }

        return $next($request);
    }
}
