<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank_account;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = Auth::user()->id;    
        $bank_accounts = DB::table('bank_accounts')->join('banks','bank_accounts.bank_code','=','banks.bank_code')->join('users','bank_accounts.user_id','=','users.id')
                        ->select('bank_accounts.*','users.firstname','users.lastname','banks.bank_name')->where('bank_accounts.user_id','=',$user_id)->get();
        $total_bank_accounts = count($bank_accounts);
        $total_amount=0;
        foreach ($bank_accounts as $bank_account) {
            $total_amount += $bank_account->amount;
        }                
        return view('home')->with('total_accounts',$total_bank_accounts)->with('total_amount',$total_amount);
    }
}
