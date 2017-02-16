<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Income;
use App\Bank_account;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IncomeController extends Controller
{
    //
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'amount' => 'required',        
            'account' => 'required',        

        ]);
    }
    public function index()
    {
    	$banks = Bank_account::all();    	
    	$incomes = DB::table('incomes')->join('bank_accounts','incomes.account_id','=','bank_accounts.id')->join('users','incomes.user_id','=','users.id')
        				->select('incomes.*','users.firstname','users.lastname','bank_accounts.account_number')->get();        				
        return view('income')->with('banks',$banks)->with('incomes',$incomes);
    }

    public function add(Request $data)
    {
    	Income::create([
            'user_id' => Auth::user()->id,
            'income_name' => $data['name'],
            'income_type' => 1,            
            'account_id' => $data['account'],            
            'amount' => $data['amount'],
        ]);	
        redirect('/incomes');
        // return view('income')->with('banks',$banks)->with('bank_accounts',$bank_accounts);
    }
}
