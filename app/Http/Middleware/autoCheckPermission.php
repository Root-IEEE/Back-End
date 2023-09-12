<?php

namespace App\Http\Middleware;

use Closure;
use Spatie\Permission\Models\Permission;

class autoCheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//        $route = $request->route()->getName();
//        $permission = Permission::where('routes','LIKE','%'.$route.'%')->where('guard_name','web')->first();
//
//        if($permission)
//        {
//            if(!auth('web')->user()->can($permission->name))
//            {
//                abort(503);
//            }
//        }
        return $next($request);
    }
}
