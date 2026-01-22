<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // hanya admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // hanya admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        Category::create([
            'name' => $request->name
        ]);

        return redirect('/categories');
    }
}
