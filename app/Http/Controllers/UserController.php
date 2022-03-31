<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

            return $query->where('name', 'like', "%{$name}%")->where('inativated_at', null);

        },

        function ($query) {
            return $query->where('status', 0);
        })->get();


        return view('admin',compact('users'));
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


    public function approveRequest(Request $request, $id)
    {
        User::where('id', $id)->update(['status' => '1']);
        //toastr()->success('', 'Solicitação Aprovada Com Sucesso.');
        return Redirect::back();
    }

    public function rejectRequest(Request $request, $id)
    {
        User::where('id', $id)->update(['inactivated_at' => Carbon::now()]);
        //toastr()->success('', 'Solicitação Rejeitada Com Sucesso.');
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
