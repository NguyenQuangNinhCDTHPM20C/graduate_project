<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteDetail extends Model
{
    use HasFactory;

    protected $table = 'favorite_detail';
    protected $favorite_detail = [
        'product_id',
        'favorite_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function favorite()
    {
        return $this->belongsTo(Favorite::class, 'favorite_id', 'id');
    }
}