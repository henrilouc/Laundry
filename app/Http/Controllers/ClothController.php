<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClothController extends Controller
{

    public function index()
    {
        Return redirect()->route('manageCloth.show');
    }


    public function store(Request $request)
    {
        Cloth::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        Return redirect()->route('manageCloth.show');
    }


    public function show()
    {
        $clothes = Cloth::all()->where('inactivated_at',null);
        Return view('manageCloth', compact('clothes'));

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
        Cloth::where('id',$id)->update(['inactivated_at' => Carbon::now()]);
        toastr()->success('', 'Roupa Inativada com sucesso.');
        return Redirect::back();
    }
}
