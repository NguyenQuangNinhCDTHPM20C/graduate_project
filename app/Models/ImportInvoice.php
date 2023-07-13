<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInvoice extends Model
{
    use HasFactory;

    public $table = "import_invoices";
    protected $fillable = [
        'name',
        'entity_type',
        'entity_id',
        'image_path'
    ];

    public function account(){
        return $this->belongTos(Account::class);
    }
}