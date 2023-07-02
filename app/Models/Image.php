<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public $table = "images";
    protected $fillable = [
        'name',
        'entity_type',
        'entity_id',
        'image_path'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'entity_id', 'id');
    }
}