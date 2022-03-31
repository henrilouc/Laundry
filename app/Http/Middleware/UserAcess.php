<?php

namespace App\Http\Middleware;

use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;

class UserAcess
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(auth()->user()->pluck('user_type_id')->contains(UserType::GUEST)) {
                return response()->view('waiting');
            }
            dd('NOT USER');
        }else {
            auth()->logout();
            return response()->view('/');
        }
    }
}
