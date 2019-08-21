<?php

namespace App\Http\Middleware;

use Closure;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Auth;

class CheckAdmin
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
        if(Auth::check() && Auth::user()->hasRole('super-admin'))
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('admin.login.index');
        }
    }
}
