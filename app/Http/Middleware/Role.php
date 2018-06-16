<?php

namespace App\Http\Middleware;

use Closure;


class Role
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

        if(!$request->user()){
            return response("Unauthorized Request", 401);
        }

        $action = $request->route()->getAction();

        $roles = isset($action['roles']) ? $action['roles'] : null;

        if($request->user()->hasAnyRole($roles) || !$roles){

            return $next($request);

        }

//        return view('errors.401')->with(response("Unathorised Response", 401));

        return response(401);
    }
}
