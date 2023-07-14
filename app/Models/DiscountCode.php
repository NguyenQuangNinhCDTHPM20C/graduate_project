<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    public $table = "discount_codes";
    protected $fillable = [
        'code',
        'discount_amount',
    ];
}