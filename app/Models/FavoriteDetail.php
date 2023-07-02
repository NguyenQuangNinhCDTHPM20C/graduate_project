<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteDetail extends Model
{
    use HasFactory;

    public $table = "favorite_details";
    protected $fillable = [
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