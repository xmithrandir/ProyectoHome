<?php

namespace ProyectoV1\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Session;
use Redirect;
use Closure;

class MiddlewareSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if($this->auth->user()->permiso != 1) {

            Session::flash('message-error', 'Sin privilegios');
            return redirect()->guest('principal');
        }
        return $next($request);
    }
}
