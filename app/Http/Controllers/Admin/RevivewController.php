<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class RevivewController extends Controller
{
    public function index()
    {
         $reviews = Review::with('product')->latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }
}
