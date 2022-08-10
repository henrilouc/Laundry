<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generatePDF(Request $request)
    {
        $transactions = Transaction::join('users', 'transactions.user_id', '=', 'users.id')->where('transactions.id', $request->id)
            ->get(['users.name', 'transactions.*']);
        view()->share('transactions',$transactions);
        if($request->has('download')){
            PDF::setOptions((['dpi' => '150','defaultFont' => 'sans-serif']));
            $details =['title' => 'test'];
            $pdf = PDF::loadView('reports.cloth',$details);
            return $pdf->download('reports.pdf');
        }

        return view('reports.cloth');
    }
}
