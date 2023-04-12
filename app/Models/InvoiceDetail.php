<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    protected $invoice_detail = [
        'invoice_id', 
        'product_id',
        'quantity',
        'price'
    ];
    public function invoice(){
        return $this->belongsTo(Invoice::class, 'id','invoice_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'id','product_id');
    }
}