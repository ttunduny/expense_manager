<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Bank_account;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'account_number' => 'required',
            'amount' => 'required',        
            'bank_code' => 'required',        

        ]);
    }
    public function index()
    {
    	$banks = Bank::all();    	
    	$bank_accounts = DB::table('bank_accounts')->join('banks','bank_accounts.bank_code','=','banks.bank_code')->join('users','bank_accounts.user_id','=','users.id')
        				->select('bank_accounts.*','users.firstname','users.lastname','banks.bank_name')->get();        				
        return view('banks')->with('banks',$banks)->with('bank_accounts',$bank_accounts);
    }

    // public function banks()
    // {
    // 	$banks = Bank::all();    	
    // 	$bank_accounts = DB::table('bank_accounts')->join('banks','bank_accounts.bank_code','=','banks.bank_code')->join('users','bank_accounts.user_id','=','users.id')
    //     				->select('bank_accounts.*','users.firstname','users.lastname','banks.bank_name')->get();        				
    //     return view('banks')->with('banks',$banks)->with('bank_accounts',$bank_accounts);
    // }

    public function add(Request $data)
    {
    	Bank_account::create([
            'user_id' => Auth::user()->id,
            'account_number' => $data['account_number'],
            'bank_code' => $data['bank_code'],
            'amount' => $data['amount'],
        ]);	
        redirect('index');
        // return view('income')->with('banks',$banks)->with('bank_accounts',$bank_accounts);
    }
}
