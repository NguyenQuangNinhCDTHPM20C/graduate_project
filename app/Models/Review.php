<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $review = [
           'account_id',
           'product_id',
           'comment',
           'rating',
           'status',
    ];
    public function account(){
        return $this->belongsTo(Account::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}