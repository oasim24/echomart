<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    public function index()
    {   $invents = Inventory::with('warehouse')->latest()->get();
        $houses = Warehouse::all();
        return view('admin.inventories.index', compact('invents', 'houses'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }


    public function edit($id)
    {
      $invent = Inventory::findOrfail($id);
      $invents = Inventory::with('warehouse')->latest()->get();
        $houses = Warehouse::all();
        return view('admin.inventories.index', compact('invents', 'houses', 'invent'));
    }
}
