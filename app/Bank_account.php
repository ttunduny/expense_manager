<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_account extends Model
{
    //
    protected $fillable = [
        'user_id','account_number', 'bank_code', 'amount'
    ];
}
