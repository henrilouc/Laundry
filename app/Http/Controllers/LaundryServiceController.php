<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\LaundryService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LaundryServiceController extends Controller
{

    public function index()
    {
        Return  redirect()->route('laundryService.show');

    }

    public function indexExtract()
    {
        Return view('extract');
    }

    public function indexManage()
    {
        Return  redirect()->route('manage.search');
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

    public function store(Request $request)
    {
        LaundryService::create([
            'user_id'=> $request->user_id,
            'description'=> $request->description,
            'kilo'=> $request->kilo,
            'credit'=> $request->credit,
            'paymentReceipt'=> $request->file
        ]);

        return redirect()->route('laundryService');
    }

    public function sell(Request $request){
        Credit::where('COD_PESSOA', $request->COD_PESSOA)->update([
            'DS_EMAIL' => $request->DS_EMAIL
        ]);
    }

    public function validateCredit(Request $request){
        Credit::create([
            'user_id'=> $request->user_id,
            'description'=> $request->description,
            'kilo'=> $request->kilo,
            'credit'=> $request->credit,
            'paymentReceipt'=> $request->file
        ]);
    }

    public function extract(Request $request)
    {
        $laundryServices = LaundryService::when(request('updated_at'), function ($query, $updated_at) {

            return $query->where('updated_at', 'like', "%{$updated_at}%");
        })->when(request('laundryUser'), function ($query) {

            return $query->wherehas('laundryUser', function ($query) {
                return $query->where('DS_PEDIDO_TAG', 'like', "%".request('laundryUser')."%")->where([
                    ['inactivated_at','!=', 'Null'] ]);
            });
        },

            function ($query) {
                return $query->orderBy('updated_at', 'ASC');
            })->get();

        return view('extract',compact('laundryServices'));
    }


    public function show(Request $request)
    {
        $laundryServices = LaundryService::when(request('updated_at'), function ($query, $updated_at) {

            return $query->where('updated_at', 'like', "%{$updated_at}%");
        },

            function ($query) {
                return $query->where([
                    ["user_id",'=', 1,]
                ])->orderBy('updated_at', 'ASC');
            })->get();

        return view('laundryService',compact('laundryServices'));
    }

    public function showPayments(Request $request)
    {
        $laundryServices = LaundryService::orderBy('created_at', 'ASC')->where('status','P')->get();

        return view('manageCredit',compact('laundryServices'));
    }

    public function approvePayin(Request $request, $id)
    {
        LaundryService::where('id', $id)->update(['status' => 'A']);
        //toastr()->success('', 'Solicitação Aprovada Com Sucesso.');
        return Redirect::back();
    }

    public function rejectPayin(Request $request, $id)
    {
        LaundryService::where('id', $id)->update(['status' => 'R']);
        //toastr()->success('', 'Solicitação Aprovada Com Sucesso.');
        return Redirect::back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaundryService  $laundryService
     * @return \Illuminate\Http\Response
     */
    public function edit(LaundryService $laundryService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaundryService  $laundryService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaundryService $laundryService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaundryService  $laundryService
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaundryService $laundryService)
    {
        //
    }
}
