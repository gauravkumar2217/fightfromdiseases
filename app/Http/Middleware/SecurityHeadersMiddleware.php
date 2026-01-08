<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeadersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // X-Frame-Options: Prevent clickjacking attacks (iFrame embedding)
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN', false);
        
        // X-Content-Type-Options: Prevent MIME type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff', false);
        
        // X-XSS-Protection: Enable XSS filter in older browsers
        $response->headers->set('X-XSS-Protection', '1; mode=block', false);
        
        // Referrer-Policy: Control referrer information
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin', false);
        
        // Permissions-Policy: Control browser features
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()', false);
        
        // Strict-Transport-Security (HSTS): Force HTTPS
        if ($request->secure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload', false);
        }
        
        // Content-Security-Policy: Prevent XSS, clickjacking, and other attacks
        $csp = $this->buildContentSecurityPolicy();
        $response->headers->set('Content-Security-Policy', $csp, false);
        
        // Remove server information
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');
        
        return $response;
    }

    /**
     * Build Content Security Policy header
     */
    private function buildContentSecurityPolicy(): string
    {
        $policies = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://code.jquery.com https://cdn.ckeditor.com https://cdn.tiny.cloud https://sp.tinymce.com",
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdn.ckeditor.com https://cdn.tiny.cloud",
            "font-src 'self' data: https://fonts.gstatic.com https://cdn.jsdelivr.net",
            "img-src 'self' data: https: blob:",
            "connect-src 'self' https://sp.tinymce.com",
            "frame-src 'self'",
            "object-src 'none'",
            "base-uri 'self'",
            "form-action 'self'",
            "frame-ancestors 'self'",
            "upgrade-insecure-requests",
        ];

        return implode('; ', $policies);
    }
}
