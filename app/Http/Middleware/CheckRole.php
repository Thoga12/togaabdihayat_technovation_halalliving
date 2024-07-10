<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role) : Response
    {
        // return $next($request);
        if (!Auth::check()) {
            return redirect('login');
        }

        // $user = Auth::user();
        $user = Auth::user();
        if ($user->role !== $role) {
            // Redirect to appropriate dashboard based on user role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else if ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                return abort(403, 'Unauthorized action.');
            }
        }


        return $next($request);
    }
}
