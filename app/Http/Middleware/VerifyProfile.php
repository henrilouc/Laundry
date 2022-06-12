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
            if(auth()->user()->user_type_id == UserType::ADMIN) {
                return response()->redirectToRoute('dashboard');
            }
            if(auth()->user()->user_type_id == UserType::GUEST) {
                return response()->redirectToRoute('waiting');
            }
            if(auth()->user()->user_type_id == UserType::USER) {
                return response()->redirectToRoute('laundryService.show');
            }
            return $next($request);
        }else {
            auth()->logout();
            return response()->view('auth.login');
        }
    }
}
