<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    public function index()
    {   $invents = Inventory::with('warehouse')->latest()->get();
        return view('admin.inventories.index', compact('invents'));
    }
}
