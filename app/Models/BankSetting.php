<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankSetting extends Model
{
    protected $fillable = [
        'bank_name',
        'account_holder',
        'iban',
        'bic',
        'message',
    ];
}