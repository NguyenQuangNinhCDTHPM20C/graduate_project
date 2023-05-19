<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $favorite = [
        'account_id'
    ];
    
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}