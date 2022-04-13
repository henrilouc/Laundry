<?php

namespace App\Http\Middleware;

use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;

class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(auth()->user()->pluck('user_type_id')->contains(UserType::ADMIN)) {
                return $next($request);
            }
            return redirect('/');
        }else {
            auth()->logout();
            return response()->view('auth.login');
        }
    }
}
