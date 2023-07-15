<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoiceDetail extends Model
{
    use HasFactory;
    
    public $table = "import_invoice_details";
    protected $fillable = [
        'import_invoice_id',
        'product_id',
        'quantity',
        'price'
    ];

    public function import_invoice(){
        return $this->belongsTo(ImportInvoice::class, 'account_id', 'id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}