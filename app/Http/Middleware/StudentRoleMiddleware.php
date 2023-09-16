<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class StudentRoleMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $studentRole = Role::where('name', 'student')->first();

        if ($user->hasRole($studentRole)) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 403);    }
}
