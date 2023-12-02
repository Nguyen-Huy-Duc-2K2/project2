<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'cat_id',
        'brand_id',
        'img_id',
        'product_name',
        'original_price',
        'selling_price',
        'ram',
        'memory',
        'made_in',
        'monitor',
        'screen_size',
        'front_camera',
        'back_camera',
        'cpu',
        'resolution',
        'wifi_speed',
        'system_operating',
        'status',
        'quantity',
        'detail',
    ];

    protected $casts = [
        'original_price' => 'decimal:2',
        'selling_price' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'img_id', 'img_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'product_id');
    }
}
