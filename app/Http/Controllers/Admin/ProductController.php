<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {   $pros = Product::with('inventory', 'images' , 'brand', 'category' , 'warehouse')->latest()->get();
        return view('admin.products.index', compact('pros'));
    }

public function create(Request $request)
{
    $categories = Category::all();
    $brands = Brand::all();
    $warehouses = Warehouse::whereNotIn('id', Product::pluck('warehouse_id'))->get();
    $inventories = Inventory::whereNotIn('id', Product::pluck('inventory_id'))->get();

    return view('admin.products.form', compact('categories', 'brands', 'warehouses', 'inventories'));
}


    public function store(Request $request)
    {
         dd($request->all());
    }
}
