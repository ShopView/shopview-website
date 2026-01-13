<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $username = config('auth.basic_username');
        $password = config('auth.basic_password');

        // Skip if credentials aren't configured
        if (empty($username) || empty($password)) {
            return $next($request);
        }

        $authUsername = $request->getUser();
        $authPassword = $request->getPassword();

        if ($authUsername === $username && $authPassword === $password) {
            return $next($request);
        }

        return response('Unauthorized', 401, [
            'WWW-Authenticate' => 'Basic realm="Staging Access"',
        ]);
    }
}
