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
    protected $blog = [
        'title',
        'slug',
        'image',
        'content'
    ];

    public function visits()
    {
        return $this->hasMany(\CyrildeWit\EloquentViewable\Contracts\Visit::class);
    }
}