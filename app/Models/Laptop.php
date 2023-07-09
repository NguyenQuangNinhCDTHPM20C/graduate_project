<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    public $table = "laptops";
    protected $fillable = [
        'product_id',
        'cpu_brand',
        'cpu_series',
        'cpu_model',
        'cpu_base_clock',
        'cpu_cache',
        'quantity',
        'cpu_mmax_clock',
        'cpu_cores',
        'cpu_threads',
        'ram_size',
        'ram_standard',
        'ram_speed',
        'storage_capacity',
        'supports_max_ram',
        'empty_ram_slots',
        'ram_socket_type',
        'storage_type',
        'display_size',
        'display_resolution',
        'display_technology',
        'thin_bezels',
        'anti_glare',
        'brightness',
        'color_coverage',
        'refresh_rate',
        'touch_screen',
        'graphics_vram',
        'graphics_vram',
        'dedicated_graphics',
        'wireless_connectivity',
        'wireless_connectivity',
        'dimensions',
        'weight',
        'battery_capacity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}