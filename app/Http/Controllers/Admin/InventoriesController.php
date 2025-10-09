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
          $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'nullable',
            'stock' => 'nullable',
            'warehouse_id' => 'nullable',
            'photo' => 'nullable',
        ]);

    Inventory::create($validated);

    return redirect()->back()->with('success', 'Category created successfully!');
    }


    public function edit($id)
    {
      $invent = Inventory::findOrfail($id);
      $invents = Inventory::with('warehouse')->latest()->get();
        $houses = Warehouse::all();
        return view('admin.inventories.index', compact('invents', 'houses', 'invent'));
    }


    public function update(Request $request, $id)
{
    $invent = Inventory::findOrFail($id);
    $request->validate([
        'name'  => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $invent->name = $request->name;
    $invent->photo = $request->photo;
    $invent->save();
    return redirect()->route('brands')->with('success', 'Brand updated successfully!');
}
}
