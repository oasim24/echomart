<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['warehouse_id', 'name', 'price', 'stock'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
