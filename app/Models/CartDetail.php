<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $cart_detail = [
        'product_id',
        'cart_id',
        'quantity',
        'price',
    ];
    public function product(){
        return $this->belongsTo(Product::class, 'id','product_id');
    }
    public function cart(){
        return $this->belongsTo(Cart::class, 'id','cart_id');
    }
}