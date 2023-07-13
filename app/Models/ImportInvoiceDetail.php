<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoiceDetail extends Model
{
    use HasFactory;
    
    public $table = "import_invoice_details";
    protected $fillable = [
        'name',
        'entity_type',
        'entity_id',
        'image_path'
    ];

    public function import_invoice(){
        return $this->belongsTo(Invoice::class);
    }
}