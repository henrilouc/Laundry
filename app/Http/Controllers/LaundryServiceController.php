<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreFormRequest;
use App\Http\Requests\TransactionFormRequest;
use App\Models\Credit;
use App\Models\Price;
use App\Models\Sale;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserType;
use App\Notifications\NewUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;

class LaundryServiceController extends Controller
{
    public function index()
    {
        Return  redirect()->route('laundryService.show');
    }


    public function dashboard(){
        return view('dashboard');
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

    public function store(TransactionFormRequest $request)
    {

        Transaction::create([
            'user_id'=> auth()->id(),
            'value'=> $request->credit,
            'amount'=> $request->amount,
            'description'=> $request->description,
            'type' => 0,
            'status' => 'P',
            'paymentReceipt'=> $request->file('file')->store('comprovantes')
        ]);


        return redirect()->route('home');
    }


    public function adminStore(AdminStoreFormRequest $request)
    {
        if(isset($request->chkBuy)) {
            $user = User::create([
                'user_type_id' => 3,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('06079669'),
                'phone' => $request->phone,
                'status' => UserType::USER,
                'birth'  => $request->birth,
                'cpf'   =>  $request->cpf
            ]);
            $user_id = $user->id;
            Notification::route('mail', config('mail.from.address'))
                ->notify(new NewUser($user));

            toastr()->info('Os dados de login foram enviados por email',"Novo Usuário");
        }else{
            $user_id = $request->user_id;
        }

        $creditPayments = [2,3,4];

        if(in_array($request->paymentMethod,$creditPayments)){
            $type = 0;
            $transactionType = "Compra";
        }elseif ($request->paymentMethod == 1) {
            $type = 1;
            $transactionType = "Dedução do saldo";

        }

        $transaction = Transaction::create([
            'user_id' => $user_id,
            'value' => $request->credit,
            'amount' => $request->amount,
            'description' => $request->description,
            'status' => 'A',
            'type' => $type,
            'paymentReceipt' => $request->file,
        ]);

        $this->updateCredit($transaction);

        toastr()->success("{$transactionType} com sucesso","");

        return redirect()->route('manage.store');
    }
        public function storePayment(Request $request){

            Transaction::create([
                'user_id' => $request->user_id,
                'value' => $request->credit,
                'amount' => $request->amount,
                'description' => $request->description,
                'status' => 'P',
                'type' => '0',
                'paymentReceipt' => $request->file,
            ]);

    }


    public function extract(Request $request)
    {
        $transactions = Transaction::all()->get();

        return view('extract',compact('transactions'));
    }


    public function show(Request $request)
    {
        $transactions = Transaction::where([
                    ["user_id", auth()->id()]
                ])->orderBy('updated_at', 'ASC')->get();

        $prices = Price::where([
            ["user_type_id", auth()->user()->user_type_id]
        ])->get();

        return view('laundryService',compact('transactions','prices'));
    }

    public function showPaymentManage(){
        $users = User::orderBy('name', 'ASC')->where('status','=',3)->get();

        $multiplier = Price::where('user_type_id', Auth::user()->user_type_id);

        return view('manageCredit',compact('users',$multiplier));
    }

    public function showPayments(Request $request)
    {
        $transactions = Transaction::orderBy('created_at', 'ASC')->where('status','P')->get();

        return view('validatePayment',compact('transactions'));
    }

    public function approvePayin(Request $request, $id)
    {
        $transaction = Transaction::where('id', $id)->update(['status' => 'A']);
        toastr()->success('', 'Pagamento Aprovado Com Sucesso.');

        $this->updateCredit($transaction);
        return Redirect::back();

    }

    public function rejectPayin(Request $request, $id)
    {
        Transaction::where('id', $id)->update(['status' => 'R']);
        toastr()->success('', 'Pagamento Rejeitado Com Sucesso.');
        return Redirect::back();
    }

    private function updateCredit($transaction)
    {
        $buy = Transaction::where('type' , 0)->where('user_id', $transaction->user_id)->sum('amount');
        $sale = Transaction::where('type' , 1)->where('user_id', $transaction->user_id)->sum('amount');
        $credit = $buy - $sale;


        Credit::updateOrCreate([
            'user_id' => $transaction->user_id
        ],[
            'user_id' => $transaction->user_id,
            'amount'  => $credit
        ]);
    }
}
