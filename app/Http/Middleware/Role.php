<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\RoleToUser;
use App\Models\RoleHasPermission;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permission_name): Response
    {
        $user = auth()->user();
        $permission = RoleToUser::where('user_id', optional($user)->id)->value('role_id');
        $data = RoleHasPermission::byRole($permission)->get()->toArray();
        // dd(in_array(str_replace("'", "", $permission_name), array_column($data, 'key')));
        if (in_array(str_replace("'", "", $permission_name), array_column($data, 'key'))){
            return $next($request);
        }
        return abort(404, 'test');
    }
}
