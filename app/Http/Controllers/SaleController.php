<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\LaundryServiceClothes;
use App\Models\Price;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
        return redirect()->route('manageSale.show');
    }

    public function store(Request $request)
    {



        $single_purchase= 1;

        if($request->paymentMethod == 1) {
            $single_purchase = 0;
        }
        $transaction = Transaction::create([
            'user_id' => $request->user_id,
            'value' => $request->credit,
            'amount' => $request->amount,
            'description' => $request->description,
            'status' => 'A',
            'type' => 1,
            'single_purchase' => $single_purchase,
            'paymentReceipt' => $request->file,
        ]);
        if($request->cloth){
            LaundryServiceClothes::create([
                'laundry_service_id' => $transaction->id,
                'cloth_id'           => $request->cloth_id,
                'amount'             => $request->amount,
                'created_at'         => $request->created_at,
                'updated_at'         => $request->updated_at
            ]);
        }
        if($request->paymentMethod == 1) {
            $transactionType = "Dedução do saldo";
            $this->updateCredit($transaction);
        }elseif(isset($request->chkBuy)) {
            $transactionType = "Compra Avulsa";
        }else {
            $transactionType = "Compra";

        }

        toastr()->success("{$transactionType} feita com sucesso","");

        return redirect()->route('manageSale');
    }


    public function show()
    {
        $users = User::orderBy('name', 'ASC')->where('status','=',3)->get();

        $multiplier = Price::where('user_type_id', Auth::user()->user_type_id);

        return view('manageSale',compact('users','multiplier'));
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

    private function updateCredit($transaction)
    {
        $buy = Transaction::where('type' , 0)->where('user_id', $transaction->user_id)->where('single_purchase', 0)->sum('amount');
        $sale = Transaction::where('type' , 1)->where('user_id', $transaction->user_id)->where('single_purchase', 0)->sum('amount');
        $credit = $buy - $sale;


        Credit::updateOrCreate([
            'user_id' => $transaction->user_id
        ],[
            'user_id' => $transaction->user_id,
            'amount'  => $credit
        ]);
    }
}
