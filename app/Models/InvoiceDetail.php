<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    use HasFactory;
    public $table = "invoice_details";
    protected $fillable = [
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