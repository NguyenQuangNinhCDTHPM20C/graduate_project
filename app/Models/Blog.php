<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Blog extends Model implements Viewable
{
    use InteractsWithViews;
    use HasFactory;
    public $table = "blogs";
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'slug',
        'image',
        'content'
    ];

    public function visits()
    {
        return $this->hasMany(\CyrildeWit\EloquentViewable\Contracts\Visit::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}