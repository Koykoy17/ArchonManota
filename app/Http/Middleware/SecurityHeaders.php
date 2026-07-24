<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * SecurityHeaders Middleware
 *
 * Appends essential HTTP security headers to every outgoing response.
 */
class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        // Prevent MIME-type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Prevent clickjacking via iframe embedding
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Protect user privacy on outbound links
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Restrict unused browser APIs
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

        // Cross-site scripting legacy header
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Enforce HTTPS HSTS only in production environments
        if (app()->isProduction()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        return $response;
    }
}
