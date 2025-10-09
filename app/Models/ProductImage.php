<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'photo', 'other_photo'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
