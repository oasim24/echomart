<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'brand_id', 'warehouse_id', 'inventory_id', 'name', 'price',
        'discount', 'vat', 'short_description', 'long_description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
