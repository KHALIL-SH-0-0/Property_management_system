<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'flat_id',
        'amount',
        'commission',
        'type',
        'status',
        'contract_pdf', 
    ];
}
