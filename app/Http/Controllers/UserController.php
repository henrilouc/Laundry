<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use App\Notifications\UserApproved;
use App\Notifications\UserRejected;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function search(){

        $users = User::when(request('name'), function ($query, $name){

            return $query->where('name', 'like', "%{$name}%");

        },

        function ($query) {
            return $query->where('status', 0)->where('inactivated_at', null);
        })->get();


        $userTypes = UserType::get();


        return view('admin',compact('users', 'userTypes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function approveRequest(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        try {
           $user->update([
                'status' => 3,
                'user_type_id' => $request->tipo
            ]);
        }catch (\Exception $e){
            die($e);
        }
        Notification::route('mail', config('mail.from.address'))
            ->notify(new UserApproved($user));
        //toastr()->success('', 'Solicitação Aprovada Com Sucesso.');
        return Redirect::back();
    }

    public function rejectRequest($id)
    {
        try{
            $user = User::where('id', $id)->first();
            $user->update(['inactivated_at' => Carbon::now()]);
            Notification::route('mail', config('mail.from.address'))
                ->notify(new UserRejected($user));
        //toastr()->success('', 'Solicitação Rejeitada Com Sucesso.');
        }catch (\Exception $e){
            die($e);
        }
        return Redirect::back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
