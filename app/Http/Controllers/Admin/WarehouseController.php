<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {   $houses = Warehouse::latest()->get();
        return view('admin.warehouses.index', compact('houses'));
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'nullable',
        'email' => 'nullable',
        'address' => 'nullable',
        'photo' => 'nullable',
    ]);

    Warehouse::create($validated);

    return redirect()->back()->with('success', 'Warehouse created successfully!');
    }

    public function edit($id)
    {
        $house = Warehouse::findOrfail($id);
        $houses = Warehouse::latest()->get();
        return view('admin.warehouses.index', compact('houses', 'house'));
    }

    public function update(Request $request, $id)
    {
        $house = Warehouse::findOrfail($id);

         $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'nullable',
        'email' => 'nullable',
        'address' => 'nullable',
        'photo' => 'nullable',
    ]);

        $house->name = $request->name;
        $house->phone = $request->phone;
        $house->email = $request->email;
        $house->address = $request->address;
        $house->photo = $request->photo;
        $house->save();
        return redirect()->route('warehouses')->with('success', 'warehouses updated successfully!');
    }


    public function destroy($id)
    {
        $house = Warehouse::findOrfail($id);

        $house->delete();
         return redirect()->route('warehouses')->with('success', 'warehouses deleted successfully!');
}
}
