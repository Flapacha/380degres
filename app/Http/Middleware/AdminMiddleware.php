<?php

namespace App\Http\Middleware;

use App\Models\Administrateur;
use Closure;

class AdminMiddleware
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

        $adminID = session("admin",-1);

        $adminID = 1;

        if($adminID!=-1) {

            $admin = Administrateur::find($adminID);

            $request->request->add(["admin"=>$admin]);

            return $next($request);
        }
        return redirect()->route("adminLogin");
    }
}
