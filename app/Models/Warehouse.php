<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'address', 'photo'];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
