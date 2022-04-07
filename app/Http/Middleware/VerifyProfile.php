<?php

namespace App\Http\Middleware;

use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;

class VerifyProfile
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
        if(auth()->check()){
//            auth()->logout();
            if(auth()->user()->pluck('user_type_id')->contains(UserType::ADMIN)) {
                return response()->redirectToRoute('admin');
            }
            if(auth()->user()->pluck('user_type_id')->contains(UserType::GUEST)) {
                return response()->redirectToRoute('waiting');
            }
            return $next($request);
        }else {
            auth()->logout();
            return response()->view('/');
        }
    }
}
