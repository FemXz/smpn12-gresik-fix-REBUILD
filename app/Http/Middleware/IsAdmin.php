<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        if (!in_array(auth()->user()->role, ['admin', 'superadmin'])) {
            abort(403, 'ADMIN ONLY');
        }

        if (auth()->user()->status !== 'active') {
            abort(403, 'ACCOUNT NOT ACTIVE');
        }

        return $next($request);
    }
}
