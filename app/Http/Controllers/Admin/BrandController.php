<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {   $brands = Brand::latest()->get();
        return view('admin.brands.index', compact('brands'));
    }

    public function store(Request $request)
    {
            $validated = $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable',
    ]);

    Brand::create($validated);

    return redirect()->back()->with('success', 'Category created successfully!');
    }


 public function edit($id)
{
    $brand = Brand::findOrFail($id);
    $brands = Brand::latest()->get();

    return view('admin.brands.index', compact('brands', 'brand'));
}

public function update(Request $request, $id)
{
    $brand = Brand::findOrFail($id);
    $request->validate([
        'name'  => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $brand->name = $request->name;
    $brand->photo = $request->photo;
    $brand->save();
    return redirect()->route('brands')->with('success', 'Brand updated successfully!');
}

public function destroy($id)
 {
     $brand = Brand::findOrFail($id);
     $brand->delete();
     return redirect()->back()->with('success', 'Brand Deleted successfully!');
 }
}
