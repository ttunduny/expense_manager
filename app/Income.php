<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //
    protected $fillable = [
        'user_id','account_id', 'income_name', 'income_type', 'amount'
    ];
}
