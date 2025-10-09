<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()

    {   $cats = Category::latest()->get();
        return view('admin.categories.index', compact('cats'));
    }

    public function store(Request $request)
    {
            $validated = $request->validate([
        'name' => 'required|string|max:255',
        'parent_id' => 'nullable|exists:categories,id',
        'photo' => 'nullable',
    ]);

    Category::create($validated);

    return redirect()->back()->with('success', 'Category created successfully!');
    }
}
