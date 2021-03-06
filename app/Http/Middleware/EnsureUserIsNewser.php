<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsNewser
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (! $request->user()->isNewser)
        {
            abort(403);
        }

        return $next($request);
    }
}
