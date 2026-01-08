<?php

namespace App\Helpers;

class SecurityHelper
{
    /**
     * Sanitize input to prevent XSS attacks
     *
     * @param string $input
     * @return string
     */
    public static function sanitizeInput($input): string
    {
        if (!is_string($input)) {
            return $input;
        }

        // Remove null bytes
        $input = str_replace(chr(0), '', $input);
        
        // Strip HTML tags and encode special characters
        $input = strip_tags($input);
        
        // Convert special characters to HTML entities
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        return trim($input);
    }

    /**
     * Sanitize HTML content (allows HTML but removes dangerous tags)
     *
     * @param string $input
     * @return string
     */
    public static function sanitizeHtml($input): string
    {
        if (!is_string($input)) {
            return $input;
        }

        // Remove null bytes
        $input = str_replace(chr(0), '', $input);
        
        // Remove dangerous tags
        $dangerousTags = ['script', 'iframe', 'object', 'embed', 'form', 'input', 'button'];
        foreach ($dangerousTags as $tag) {
            $input = preg_replace('/<' . $tag . '[^>]*>.*?<\/' . $tag . '>/is', '', $input);
            $input = preg_replace('/<' . $tag . '[^>]*>/i', '', $input);
        }
        
        // Remove javascript: and data: URLs
        $input = preg_replace('/javascript:/i', '', $input);
        $input = preg_replace('/data:text\/html/i', '', $input);
        
        return trim($input);
    }

    /**
     * Validate and sanitize email
     *
     * @param string $email
     * @return string|false
     */
    public static function sanitizeEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Sanitize SQL input (Laravel's Eloquent already handles this, but this is extra protection)
     *
     * @param string $input
     * @return string
     */
    public static function sanitizeSql($input): string
    {
        if (!is_string($input)) {
            return $input;
        }

        // Remove SQL injection patterns
        $patterns = [
            '/(\bUNION\b.*\bSELECT\b)/i',
            '/(\bSELECT\b.*\bFROM\b)/i',
            '/(\bINSERT\b.*\bINTO\b)/i',
            '/(\bDELETE\b.*\bFROM\b)/i',
            '/(\bUPDATE\b.*\bSET\b)/i',
            '/(\bDROP\b.*\bTABLE\b)/i',
            '/(\bEXEC\b|\bEXECUTE\b)/i',
            '/(\bSCRIPT\b)/i',
        ];

        foreach ($patterns as $pattern) {
            $input = preg_replace($pattern, '', $input);
        }

        return trim($input);
    }
}

