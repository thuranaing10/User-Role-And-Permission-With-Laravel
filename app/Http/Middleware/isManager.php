<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles = UserRole::where('user_id', Auth::guard('admin')->id())->pluck('role_id')->toArray();

        foreach($userRoles as $role){
            if ($role->role_id != 2 || $role->role_id != 1) {
                return response()->json([
                    'success' => false,
                    'message'=> "Unauthorized!",
                    'data' => null,
                ], config('http_status.unauthorized'));
            }
        }

        return $next($request);
    }
}
