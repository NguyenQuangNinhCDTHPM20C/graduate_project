<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $review = [
           'account_id',
           'product_id',
           'comment',
           'rating',
           'status',
    ];
    public function account(){
        return $this->belongsTo(Account::class, 'id', 'account_id');
    }
    public function product_id(){
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }
}