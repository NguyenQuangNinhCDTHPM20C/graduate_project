<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoice extends Model
{
    use HasFactory;

    public $table = "import_invoices";
    protected $fillable = [
        'code',
        'account_id',
        'supplier',
        'total',
    ];

    public function account(){
        return $this->belongsTo(Account::class);
    }
}