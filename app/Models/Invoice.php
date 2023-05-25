<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $invoice = [
        'code',
        'account_id',
        'order_date',
        'name',
        'address',
        'phone',
        'email',
        'notes',
        'total',
        'payment_method',
        'status',
        'rememberToken'
    ];
    public function account(){
        return $this->belongsTo(Account::class, 'id', 'account_id');
    }
}