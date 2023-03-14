<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShortCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $content = $response->getContent();
        foreach (\App\Models\ShortCode::all() as $code) {
            $content = str_replace($code->shortcode, $code->replace, $content);
        }
        $response->setContent($content);

        return $response;
    }
}
