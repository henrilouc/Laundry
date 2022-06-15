<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\Credit;
use App\Models\User;
use App\Models\UserType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view("userRegister");
    }
    public function createUser(RegisterFormRequest $request)
    {
        $user = User::create([
            'user_type_id' => UserType::GUEST,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'status' => UserType::GUEST,
            'birth'  => $request->birth,
            'cpf'   =>  $request->cpf
        ]);

        Credit::create([
            'user_id' => $user->id,
            'amount' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Auth::loginUsingId($user->id);
        toastr()->success('Uma notificação foi enviada ao seu email.', 'Cadastro Realizado com Sucesso');
        return redirect()->route('home');
    }
}
