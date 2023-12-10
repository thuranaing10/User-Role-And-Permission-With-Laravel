<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserRole;

class isSuperAdmin
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

        if (in_array(1, $userRoles)) {
            return response()->json([
                    'success' => false,
                    'message'=> "Unauthorized!",
                    'data' => null,
                ], config('http_status.unauthorized'));
        }


        return $next($request);
    }
}
