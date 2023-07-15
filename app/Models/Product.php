<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    public $table = "products";
    protected $fillable = [
        'brand_id',
        'category_id',
        'sub_category_id',
        'name',
        'slug',
        'code',
        'quantity',
        'tag',
        'selling_price',
        'discount_price',
        'description',
        'featured_image_id',
        'status'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    public function featured_image()
    {
        return $this->belongsTo(Image::class, 'featured_image_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}