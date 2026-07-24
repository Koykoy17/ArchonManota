<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * SecurityHeaders Middleware
 *
 * Appends HTTP security headers to every outgoing response.
 * Register this middleware in bootstrap/app.php (Laravel 12):
 *
 *   ->withMiddleware(function (Middleware $middleware) {
 *       $middleware->append(\App\Http\Middleware\SecurityHeaders::class);
 *   })
 *
 * Headers to implement (TODO):
 *
 *   Content-Security-Policy (CSP)
 *     – Restrict which resources the browser may load.
 *     – Start with report-only mode to avoid breaking changes.
 *     – Example: "default-src 'self'; script-src 'self' 'nonce-{nonce}'"
 *
 *   X-Content-Type-Options
 *     – Prevent MIME-type sniffing.
 *     – Value: "nosniff"
 *
 *   X-Frame-Options
 *     – Prevent clickjacking by disallowing iframe embedding.
 *     – Value: "SAMEORIGIN" (or "DENY" for stricter policy)
 *
 *   Referrer-Policy
 *     – Control referrer information sent with requests.
 *     – Value: "strict-origin-when-cross-origin"
 *
 *   Permissions-Policy
 *     – Restrict browser feature access (camera, microphone, geolocation).
 *     – Example: "camera=(), microphone=(), geolocation=()"
 *
 *   Strict-Transport-Security (HSTS)
 *     – Force HTTPS connections.
 *     – Value: "max-age=31536000; includeSubDomains" (production only)
 *     – DO NOT enable HSTS on local/dev environments.
 *
 * TODO:
 *   - Implement each header in the handle() method
 *   - Guard HSTS behind an environment check (app()->isProduction())
 *   - Generate and inject a per-request CSP nonce (for inline scripts)
 *   - Add CSP violation report-uri endpoint (future)
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
        $response = $next($request);

        // TODO: Add security headers to $response
        // $response->headers->set('X-Content-Type-Options', 'nosniff');
        // $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        // $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        // $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
        //
        // if (app()->isProduction()) {
        //     $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        // }

        return $response;
    }
}
