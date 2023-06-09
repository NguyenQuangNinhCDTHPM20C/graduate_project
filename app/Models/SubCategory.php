<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public $table = "sub_categories";
    protected $sub_categories = [
        'category_id',
        'name',
        'slug',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}