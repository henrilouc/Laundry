<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\UserType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PriceController extends Controller
{

    public function index()
    {
        Return redirect()->route('managePrice.show');
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
        Price::create([
            'multiplier' => $request->multiplier,
            'user_type_id' => $request->user_type_id,
            'min' => $request->min,
            'max' => $request->max,
            'description' => $request->description
        ]);

        Return redirect()->route('managePrice.show');
    }

    public function show()
    {
        $userTypes = UserType::all();
        $prices = Price::where('inactivated_at',null)->get();

        Return view('managePrice', compact('userTypes','prices'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function softDelete($id)
    {
        Price::where('id',$id)->update(['inactivated_at' => Carbon::now()]);
        toastr()->success('', 'Preço deletado com sucesso.');
        return Redirect::back();
    }
}
