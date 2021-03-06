<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    /*check if admin or not*/
       $user = Auth::user();

if(!$user->isAdmin()){
    session()->flash('warning', 'you are not authorized to see this content');
    return redirect()->route('categories');
}        return $next($request);
    }
}
